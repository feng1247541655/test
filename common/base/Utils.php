<?php
namespace common\base;
use Yii;

/**
 * 常用的公共方法类,全部为静态方法，与框架无关，保持代码的独立性
 */

class Utils
{
    /**
     * 对称加密算法
     * @param $data
     * @return string
     */
    public static function encrypt($data, $key, $iv) {
        $check_php_version = PHP_VERSION > '5.5.0';
        if($check_php_version){
            $td = mcrypt_module_open('rijndael-128', '', 'cbc', '');
            if (mcrypt_generic_init($td, $key, $iv) != -1) {
                $encryptedcbc = mcrypt_generic($td, $data);
                mcrypt_generic_deinit($td);
                mcrypt_module_close($td);
            }else{
                $encryptedcbc = '';
            }            
        }else{
            $encryptedcbc = mcrypt_cbc(MCRYPT_RIJNDAEL_128, $key, $data, MCRYPT_ENCRYPT, $iv);
        }
        return base64_encode($encryptedcbc);
    }
    
    /**
     * 对称解密算法
     * @param $data
     * @return string 
     */
    public static function decrypt($data, $key, $iv) {
        $data_decode = base64_decode($data);
        $check_php_version = PHP_VERSION > '5.5.0';
        if($check_php_version){
            $td = mcrypt_module_open('rijndael-128', '', 'cbc', '');
            if (mcrypt_generic_init($td, $key, $iv) != -1) {
                $decryptedcbc = mdecrypt_generic($td, $data_decode);
                mcrypt_generic_deinit($td);
                mcrypt_module_close($td);
            }else{
                $decryptedcbc = '';
            }
        }else{
            $decryptedcbc = mcrypt_cbc(MCRYPT_RIJNDAEL_128, $key, $data_decode, MCRYPT_DECRYPT, $iv);
        }
        return $decryptedcbc;
    }    
    /**
     * 友好显示var_dump
     *
     */
    public static function dump( $var, $echo = true, $label = null, $strict = true ) {
        $label = ( $label === null ) ? '' : rtrim( $label ) . ' ';
        if ( ! $strict ) {
            if ( ini_get( 'html_errors' ) ) {
                $output = print_r( $var, true );
                $output = "<pre>" . $label . htmlspecialchars( $output, ENT_QUOTES ) . "</pre>";
            } else {
                $output = $label . print_r( $var, true );
            }
        } else {
            ob_start();
            var_dump( $var );
            $output = ob_get_clean();
            if ( ! extension_loaded( 'xdebug' ) ) {
                $output = preg_replace( "/\]\=\>\n(\s+)/m", "] => ", $output );
                $output = '<pre>' . $label . htmlspecialchars( $output, ENT_QUOTES ) . '</pre>';
            }
        }
        if ( $echo ) {
            echo $output;
            return null;
        } else
            return $output;
    }

    /**
     * 封装curl函数
     *
     *
     */
    public static function curl($url,$params=array(),$options=array()){
        $curlInstance = curl_init($url);
        $defaultOpt = array(
            CURLOPT_POST=>1,
            CURLOPT_RETURNTRANSFER=>1,
            CURLOPT_TIMEOUT=>1,
        );
        if(is_array($options) && !empty($options) ){
            foreach($options as $k=>$v){
                $defaultOpt[$k]=$v;
            }
        }
        foreach($defaultOpt as $k=>$v){
            curl_setopt($curlInstance,$k,$v);
        }
        if($defaultOpt[CURLOPT_POST] && !empty($params)){ //如果输入的是Post请求，并设置了请求参数，将post内容封装到CURLOPT_POSTFIELDS中
            if(is_array($params)){
                $content=http_build_query($params);
            }else{
                $content=$params;
            }
            curl_setopt($curlInstance,CURLOPT_POSTFIELDS, $content);
        }
        
        $count=0;
        $ret = null;
        while($count<3){
            $ret = curl_exec($curlInstance);
            $errno = curl_errno($curlInstance);
            $errmsg = curl_error($curlInstance);
            if(!$errno) {
                break;
            }
            //此处要记录错误日志
            $count++;
        }
        curl_close($curlInstance);
        return $ret;
    }  
    /**
     * base64_encode
     */
    public static function b64encode( $string ) {
        $data = base64_encode( $string );
        $data = str_replace( array ( '+' , '/' , '=' ), array ( '-' , '_' , '' ), $data );
        return $data;
    }

    /**
     * base64_decode
     */
    public static function b64decode( $string ) {
        $data = str_replace( array ( '-' , '_' ), array ( '+' , '/' ), $string );
        $mod4 = strlen( $data ) % 4;
        if ( $mod4 ) {
            $data .= substr( '====', $mod4 );
        }
        return base64_decode( $data );
    }
     /**
     * 验证邮箱
     */
    public static function email( $str ) {
        if ( empty( $str ) )
            return false;
        $chars = "/^([a-z0-9+_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,6}\$/i";
        if ( strpos( $str, '@' ) !== false && strpos( $str, '.' ) !== false ) {
            if ( preg_match( $chars, $str ) ) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    /**
     * 验证ip
     */
    public static function ip( $str ) {
        if ( empty( $str ) )
            return false;

        if ( ! preg_match( '#^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$#', $str ) ) {
            return false;
        }

        $ip_array = explode( '.', $str );

        //真实的ip地址每个数字不能大于255（0-255）
        return ( $ip_array[0] <= 255 && $ip_array[1] <= 255 && $ip_array[2] <= 255 && $ip_array[3] <= 255 ) ? true : false;
    }
    /**
     * 验证网址
     */
    public static function url( $str ) {
        if ( empty( $str ) )
            return true;

        return preg_match( '#(http|https|ftp|ftps)://([\w-]+\.)+[\w-]+(/[\w-./?%&=]*)?#i', $str ) ? true : false;
    }
    
    /**
     * 字符截取
     *
     * @param $string
     * @param $length
     * @param $dot
     */
    public static function cutstr( $string, $length, $dot = '...', $charset = 'utf-8' ) {
        if ( strlen( $string ) <= $length )
            return $string;

        $pre = chr( 1 );
        $end = chr( 1 );
        $string = str_replace( array ( '&amp;' , '&quot;' , '&lt;' , '&gt;' ), array ( $pre . '&' . $end , $pre . '"' . $end , $pre . '<' . $end , $pre . '>' . $end ), $string );

        $strcut = '';
        if ( strtolower( $charset ) == 'utf-8' ) {

            $n = $tn = $noc = 0;
            while ( $n < strlen( $string ) ) {

                $t = ord( $string[$n] );
                if ( $t == 9 || $t == 10 || ( 32 <= $t && $t <= 126 ) ) {
                    $tn = 1;
                    $n ++;
                    $noc ++;
                } elseif ( 194 <= $t && $t <= 223 ) {
                    $tn = 2;
                    $n += 2;
                    $noc += 2;
                } elseif ( 224 <= $t && $t <= 239 ) {
                    $tn = 3;
                    $n += 3;
                    $noc += 2;
                } elseif ( 240 <= $t && $t <= 247 ) {
                    $tn = 4;
                    $n += 4;
                    $noc += 2;
                } elseif ( 248 <= $t && $t <= 251 ) {
                    $tn = 5;
                    $n += 5;
                    $noc += 2;
                } elseif ( $t == 252 || $t == 253 ) {
                    $tn = 6;
                    $n += 6;
                    $noc += 2;
                } else {
                    $n ++;
                }

                if ( $noc >= $length ) {
                    break;
                }

            }
            if ( $noc > $length ) {
                $n -= $tn;
            }

            $strcut = substr( $string, 0, $n );

        } else {
            for ( $i = 0; $i < $length; $i ++ ) {
                $strcut .= ord( $string[$i] ) > 127 ? $string[$i] . $string[++ $i] : $string[$i];
            }
        }

        $strcut = str_replace( array ( $pre . '&' . $end , $pre . '"' . $end , $pre . '<' . $end , $pre . '>' . $end ), array ( '&amp;' , '&quot;' , '&lt;' , '&gt;' ), $strcut );

        $pos = strrpos( $strcut, chr( 1 ) );
        if ( $pos !== false ) {
            $strcut = substr( $strcut, 0, $pos );
        }
        return $strcut . $dot;
    }
     /**
      * 自动转换字符集 支持数组转换
      *
      *
      */  
    public static function autoCharset ($string, $from = 'gbk', $to = 'utf-8')
    {
        $from = strtoupper($from) == 'UTF8' ? 'utf-8' : $from;
        $to = strtoupper($to) == 'UTF8' ? 'utf-8' : $to;
        if (strtoupper($from) === strtoupper($to) || empty($string) || (is_scalar($string) && ! is_string($string))) {
            //如果编码相同或者非字符串标量则不转换
            return $string;
        }
        if (is_string($string)) {
            if (function_exists('mb_convert_encoding')) {
                return mb_convert_encoding($string, $to, $from);
            } elseif (function_exists('iconv')) {
                return iconv($from, $to, $string);
            } else {
                return $string;
            }
        } elseif (is_array($string)) {
            foreach ($string as $key => $val) {
                $_key = self::autoCharset($key, $from, $to);
                $string[$_key] = self::autoCharset($val, $from, $to);
                if ($key != $_key)
                    unset($string[$key]);
            }
            return $string;
        } else {
            return $string;
        }
    }



}

