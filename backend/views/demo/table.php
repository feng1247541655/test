<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->

        <div class="row">
            <div class="col-sm-12">
                <div class="widget-box">
                    <div class="widget-body">
                        <div class="widget-main">
                            <form class="form-inline">
                                <label class="inline">姓名</label> <input type="text" name="" class="input-sm" /> 
                                <label class="inline left">项目</label>
                                <div class="btn-group">
                                    <select class="col-xs-12" style="width:150px;">
                                        <option value="">请选择</option>
                                        <option value="1">足球</option>
                                        <option value="1">篮球</option>
                                    </select>
                                </div>
                                <label class="inline left">项目</label>
                                <div class="btn-group">
                                    <select class="col-xs-12" style="width:150px;">
                                        <option value="">请选择</option>
                                        <option value="1">足球</option>
                                        <option value="1">篮球</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-purple btn-sm">
                                    Search
                                    <i class="ace-icon fa fa-search icon-on-right bigger-110"></i>
                                </button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <div class="modal-footer no-margin-top">
                    <div class="col-xs-6">
                        <div class="dataTables_info pull-left">
                            <button class="btn btn-sm btn-success" onclick="masklayer('content_table')">按钮1</button>
                            <button class="btn btn-sm btn-info">按钮2</button>
                            <button class="btn btn-sm btn-primary">按钮3</button>
                            <button class="btn btn-sm btn-warning">按钮4</button>
                            <button class="btn btn-sm btn-danger">按钮5</button>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div>
                            <ul class="pagination pull-right no-margin">
                                <li class="disabled">
                                    <a href="#">
                                        <i class="ace-icon fa fa-angle-double-left"></i>
                                    </a>
                                </li>

                                <li class="active">
                                    <a href="#">1</a>
                                </li>

                                <li>
                                    <a href="#">2</a>
                                </li>

                                <li>
                                    <a href="#">3</a>
                                </li>

                                <li>
                                    <a href="#">4</a>
                                </li>

                                <li>
                                    <a href="#">5</a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">
                                <label class="position-relative">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </th>
                            <th>Domain</th>
                            <th>Price</th>
                            <th class="hidden-480">Clicks</th>

                            <th>
                                <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                                Update
                            </th>
                            <th class="hidden-480">Status</th>

                            <th></th>
                        </tr>
                    </thead>

                    <tbody id="content_table">
                        <tr>
                            <td class="center">
                                <label class="position-relative">
                                    <input type="checkbox" class="ace" />
                                    <span class="lbl"></span>
                                </label>
                            </td>

                            <td>
                                <a href="#">ace.com</a>
                            </td>
                            <td>$45</td>
                            <td class="hidden-480">3,330</td>
                            <td>Feb 12</td>

                            <td class="hidden-480">
                                <span class="label label-sm label-warning">Expiring</span>
                            </td>

                            <td>
                                <div class="hidden-sm hidden-xs action-buttons">
                                    <a class="blue" href="#">
                                        <i class="ace-icon fa fa-search-plus bigger-130"></i>
                                    </a>

                                    <a class="green" href="#">
                                        <i class="ace-icon fa fa-pencil bigger-130"></i>
                                    </a>

                                    <a class="red" href="#">
                                        <i class="ace-icon fa fa-trash-o bigger-130"></i>
                                    </a>

                                    <a class="purple" href="#">
                                        <i class="ace-icon fa fa-plus-circle bigger-130"></i>
                                    </a>

                                    <a class="green" href="#">
                                        <i class="ace-icon fa fa-refresh bigger-130"></i>
                                    </a>
                                    <a class="red" href="#">
                                        <i class="ace-icon fa fa-plus bigger-130"></i>
                                    </a>

                                    <a class="green" href="#">
                                        <i class="ace-icon fa fa-check bigger-130"></i>
                                    </a>
                                    <a class="red" href="#">
                                        <i class="ace-icon fa fa-heart bigger-130"></i>
                                    </a>
                                    <a class="red" href="#">
                                        <i class="ace-icon fa fa-reply bigger-130"></i>
                                    </a>
                                    <a class="purple" href="#">
                                        <i class="ace-icon fa fa-bell-o bigger-130"></i>
                                    </a>
                                    <a class="green" href="#">
                                        <i class="ace-icon fa fa-circle bigger-130"></i>
                                    </a>
                                    <a class="orange" href="#">
                                        <i class="ace-icon fa fa-exclamation-triangle bigger-130"></i>
                                    </a>

                                </div>

                                <div class="hidden-md hidden-lg">
                                    <div class="inline position-relative">
                                        <button class="btn btn-minier btn-yellow dropdown-toggle" data-toggle="dropdown" data-position="auto">
                                            <i class="ace-icon fa fa-caret-down icon-only bigger-120"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-menu-right dropdown-caret dropdown-close">
                                            <li>
                                                <a href="#" class="tooltip-info" data-rel="tooltip" title="View">
                                                    <span class="blue">
                                                        <i class="ace-icon fa fa-search-plus bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-success" data-rel="tooltip" title="Edit">
                                                    <span class="green">
                                                        <i class="ace-icon fa fa-pencil-square-o bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
                                                    <span class="red">
                                                        <i class="ace-icon fa fa-trash-o bigger-120"></i>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
                <div class="modal-footer no-margin-top">
                    <div class="col-xs-6">
                        <div class="dataTables_info pull-left">
                            The total number of records : 120
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div>
                            <ul class="pagination pull-right no-margin">
                                <li class="disabled">
                                    <a href="#">
                                        <i class="ace-icon fa fa-angle-double-left"></i>
                                    </a>
                                </li>

                                <li class="active">
                                    <a href="#">1</a>
                                </li>

                                <li>
                                    <a href="#">2</a>
                                </li>

                                <li>
                                    <a href="#">3</a>
                                </li>

                                <li>
                                    <a href="#">4</a>
                                </li>

                                <li>
                                    <a href="#">5</a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="ace-icon fa fa-angle-double-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- /.span -->
        </div><!-- /.row -->

        <div class="hr hr-18 dotted hr-double"></div>

        <h4 class="pink">
            <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
            <a href="#modal-table" role="button" class="green" data-toggle="modal"> Table Inside a Modal Box </a>
        </h4>

        <div class="hr hr-18 dotted hr-double"></div>

        <div id="modal-table" class="modal fade" tabindex="-99">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header no-padding">
                        <div class="table-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                <span class="white">&times;</span>
                            </button>
                            Results for "Latest Registered Domains
                        </div>
                    </div>

                    <div class="modal-body no-padding">
                        <table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
                            <thead>
                                <tr>
                                    <th>Domain</th>
                                    <th>Price</th>
                                    <th>Clicks</th>

                                    <th>
                                        <i class="ace-icon fa fa-clock-o bigger-110"></i>
                                        Update
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#">ace.com</a>
                                    </td>
                                    <td>$45</td>
                                    <td>3,330</td>
                                    <td>Feb 12</td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="#">base.com</a>
                                    </td>
                                    <td>$35</td>
                                    <td>2,595</td>
                                    <td>Feb 18</td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="#">max.com</a>
                                    </td>
                                    <td>$60</td>
                                    <td>4,400</td>
                                    <td>Mar 11</td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="#">best.com</a>
                                    </td>
                                    <td>$75</td>
                                    <td>6,500</td>
                                    <td>Apr 03</td>
                                </tr>

                                <tr>
                                    <td>
                                        <a href="#">pro.com</a>
                                    </td>
                                    <td>$55</td>
                                    <td>4,250</td>
                                    <td>Jan 21</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="modal-footer no-margin-top">
                        <button class="btn btn-sm btn-danger pull-left" data-dismiss="modal">
                            <i class="ace-icon fa fa-times"></i>
                            Close
                        </button>

                        <ul class="pagination pull-right no-margin">
                            <li class="prev disabled">
                                <a href="#">
                                    <i class="ace-icon fa fa-angle-double-left"></i>
                                </a>
                            </li>

                            <li class="active">
                                <a href="#">1</a>
                            </li>

                            <li>
                                <a href="#">2</a>
                            </li>

                            <li>
                                <a href="#">3</a>
                            </li>

                            <li class="next">
                                <a href="#">
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->
<script type="text/javascript">
    jQuery(function($) {
        $(document).on('click', 'th input:checkbox' , function(){
            var that = this;
            $(this).closest('table').find('tr > td:first-child input:checkbox')
            .each(function(){
                this.checked = that.checked;
                $(this).closest('tr').toggleClass('selected');
            });
        });
    });



    function masklayer(obj){
        $('#'+obj).append('<div class="message-loading-overlay"><i class="fa-spin ace-icon fa fa-spinner grey bigger-300"></i></div>');
    }
</script>