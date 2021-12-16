
<?php
/* Author: Alfred Ntiamoah
  Company: New Age Developers Group
  Email: antiamoah890@gmail.com
  website: natlink.net
  License: Proprietary license
  All Right Reserved (2017)
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style>
    .portlet{
        position: relative;
        margin-top: 0px !important;
        top:0px !important;
    }
    .main{
        margin-top:20px;
    }

    /*Arranging UI*/
    .progress{
        display: none !important;
    }
    .left-panel{
        display: none !important;
    }
    #applicant-id{
        display: none !important;
    }
    #bread{
        display: none !important;
    }
    .logo-small{
        display: none !important;
    }
</style>
<div class="main col-md-12" ng-controller="AdminController">
    <div class="col-md-4 col-sm-6">
        <div class="widget-panel widget-style-1 bg-inverse">
            <i class="zmdi zmdi-accounts-list"></i>
            <h2 class="m-0 counter text-white">{{adminService.data.users.length}}</h2>
            <div class="text-white">Number Of Users</div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="widget-panel widget-style-1 bg-success">
            <i class="fa fa-group"></i> 
            <h2 class="m-0 counter text-white">1</h2>
            <div class="text-white">Number Of Registrars</div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6">
        <div class="widget-panel widget-style-1 bg-info">
            <i class="zmdi zmdi-group"></i>
            <h2 class="m-0 counter text-white">{{adminService.data.groups.length}}</h2>
            <div class="text-white">Number Of Groups</div>
        </div>
    </div>


    <div class="col-md-12">
        <ul class="nav nav-tabs nav-justified"> 
            <li class="active"> 
                <a href="#manage-users" data-toggle="tab" aria-expanded="true"> 
                    <span class="visible-xs"><i class="zmdi zmdi-accounts-list"></i></span> 
                    <span class="hidden-xs">Manage Users</span> 
                </a> 
            </li> 
            <li class=""> 
                <a href="#manage-groups" data-toggle="tab" aria-expanded="false"> 
                    <span class="visible-xs"><i class="fa fa-user"></i></span> 
                    <span class="hidden-xs">Manage Groups</span> 
                </a> 
            </li> 
            <!--            <li class=""> 
                            <a href="#manage-permissions" data-toggle="tab" aria-expanded="false"> 
                                <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                <span class="hidden-xs">Manage Permission</span> 
                            </a> 
                        </li> -->
            <li class=""> 
                <a href="#view-users" data-toggle="tab" aria-expanded="false"> 
                    <span class="visible-xs"><i class="fa fa-users"></i></span> 
                    <span class="hidden-xs">View Users</span> 
                </a> 
            </li> 
            
             <li class=""> 
                <a href="#settings" data-toggle="tab" aria-expanded="false"> 
                    <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                    <span class="hidden-xs">Settings</span> 
                </a> 
            </li> 
        </ul> 
        <div class="tab-content"> 
            <div class="tab-pane active" id="manage-users"> 
                <!----------------------------------------MANAGE USER ------------------------------------------->
                <!----------------------------------------------------------------------------------------------->

                <div> 
                    <div class="panel-group panel-group-joined" id="accordion-test"> 

                        <div class="panel panel-default"> 
                            <div class="panel-heading"> 
                                <h4 class="panel-title"> 
                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseOne" 
                                       class="collapsed" aria-expanded="false">
                                        Add user to group
                                    </a> 
                                </h4> 
                            </div> 
                            <div id="collapseOne" class="panel-collapse collapse " aria-expanded="false" style="height: 0px;"> 
                                <div class="panel-body">
                                    <label class="col-sm-2 control-label">Select Group</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" ng-model="adminService.group.name">
                                            <option ng-repeat="option in adminService.data.groups" ng-value="option.name">{{option.name}}</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12" style="height:10px;"></div>

                                    <label class="col-sm-2 control-label">Select User</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" ng-model="adminService.user.id">
                                            <option ng-repeat="option in adminService.data.users" ng-value="option.id">{{option.name}}</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12" style="height:10px;"></div>

                                    <button type="button" class="btn btn-block btn-lg btn-info" ng-click="addUserToGroup()">
                                        Add To Group
                                    </button>

                                </div> 
                            </div> 
                        </div> 


                        <div class="panel panel-default"> 
                            <div class="panel-heading"> 
                                <h4 class="panel-title"> 
                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseTwo" 
                                       aria-expanded="false" class="collapsed">
                                        Delete user from group
                                    </a> 
                                </h4> 
                            </div> 
                            <div id="collapseTwo" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"> 
                                <div class="panel-body">
                                    <div class="panel-body">

                                        <label class="col-sm-2 control-label">Select User</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" ng-model="adminService.user.email">
                                                <option ng-repeat="option in adminService.data.users" ng-value="option.email">{{option.name}}</option>

                                            </select>

                                        </div>
                                        <div class="col-md-12" style="height:10px;"></div>

                                        <label class="col-sm-2 control-label">Select Group</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" ng-model="adminService.group.name">
                                                <option ng-repeat="option in adminService.data.groups" ng-value="option.name">{{option.name}}</option>

                                            </select>

                                        </div>


                                        <div class="col-md-12" style="height:10px;"></div>

                                        <button type="button" class="btn btn-block btn-lg btn-info" ng-click="deleteUserFromGroup()">
                                            Delete From Group
                                        </button>

                                    </div>    
                                </div> 
                            </div> 
                        </div> 
                        <div class="panel panel-default"> 
                            <div class="panel-heading"> 
                                <h4 class="panel-title"> 
                                    <a data-toggle="collapse" data-parent="#accordion-test" href="#collapseThree" class="collapsed" aria-expanded="false">
                                        View all users
                                    </a> 
                                </h4> 
                            </div> 
                            <div id="collapseThree" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"> 
                                <div class="panel-body">

                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div>

            </div> 
            <div class="tab-pane " id="manage-groups"> 
                <!----------------------------------------MANAGE GROUP ------------------------------------------->
                <!----------------------------------------------------------------------------------------------->

                <div> 
                    <div class="panel-group panel-group-joined" id="manage-group"> 

                        <div class="panel panel-default"> 
                            <div class="panel-heading"> 
                                <h4 class="panel-title"> 
                                    <a data-toggle="collapse" data-parent="#manage-group" href="#create" 
                                       class="collapsed" aria-expanded="false">
                                        Create new group
                                    </a> 
                                </h4> 
                            </div> 
                            <div id="create" class="panel-collapse collapse " aria-expanded="false" style="height: 0px;"> 
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Group name</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" ng-model="adminService.group.name" >
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="height:10px;"></div>
                                    <div class="form-group">
                                        <label class="col-md-2 control-label">Group definition</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" ng-model="adminService.group.def" >
                                        </div>
                                    </div>
                                    <div class="col-md-12" style="height:10px;"></div>

                                    <button type="button" class="btn btn-block btn-lg btn-info"
                                            ng-click="createGroup()">
                                        Add To Group
                                    </button>

                                </div> 
                            </div> 
                        </div> 


                        <div class="panel panel-default"> 
                            <div class="panel-heading"> 
                                <h4 class="panel-title"> 
                                    <a data-toggle="collapse" data-parent="#manage-group" href="#deletegroup" 
                                       aria-expanded="false" class="collapsed">
                                        Delete group
                                    </a> 
                                </h4> 
                            </div> 
                            <div id="deletegroup" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"> 
                                <div class="panel-body">
                                    <div class="panel-body">
                                        <label class="col-sm-2 control-label">Select Group</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" ng-model="adminService.group.name">
                                                <option ng-repeat="option in adminService.data.groups" ng-value="option.name">{{option.name}}</option>
                                            </select>

                                        </div>
                                        <div class="col-md-12" style="height:10px;"></div>
                                        <div class="col-md-12" style="height:10px;"></div>

                                        <button type="button" class="btn btn-block btn-lg btn-info" ng-click="deleteGroup()">
                                            Delete Group
                                        </button>

                                    </div>    
                                </div> 
                            </div> 
                        </div> 

                        <div class="panel panel-default"> 
                            <div class="panel-heading"> 
                                <h4 class="panel-title"> 
                                    <a data-toggle="collapse" data-parent="#manage-group" href="#viewgroups" class="collapsed" aria-expanded="false">
                                        View group information
                                    </a> 
                                </h4> 
                            </div> 
                            <div id="viewgroups" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"> 
                                <div class="panel-body">

                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div>

            </div> 
            <!--            <div class="tab-pane" id="manage-permissions"> 
            
                            --------------------------------------MANAGE PRIVILEGES-----------------------------------------
                            -------------------------------------------------------------------------------------------
            
                            <div> 
                                <div class="panel-group panel-group-joined" id="manage-group"> 
            
                                    <div class="panel panel-default"> 
                                        <div class="panel-heading"> 
                                            <h4 class="panel-title"> 
                                                <a data-toggle="collapse" data-parent="#create-perm" href="#create-perm" 
                                                   class="collapsed" aria-expanded="false">
                                                    Add new permission
                                                </a> 
                                            </h4> 
                                        </div> 
                                        <div id="create-perm" class="panel-collapse collapse " aria-expanded="false" style="height: 0px;"> 
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Permission name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="height:10px;"></div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Permission definition</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12" style="height:10px;"></div>
            
                                                <button type="button" class="btn btn-block btn-lg btn-info">Add To Permission</button>
            
                                            </div> 
                                        </div> 
                                    </div> 
            
            
                                    <div class="panel panel-default"> 
                                        <div class="panel-heading"> 
                                            <h4 class="panel-title"> 
                                                <a data-toggle="collapse" data-parent="#manage-perm" href="#delete-perm" 
                                                   aria-expanded="false" class="collapsed">
                                                    Delete Permission
                                                </a> 
                                            </h4> 
                                        </div> 
                                        <div id="delete-perm" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"> 
                                            <div class="panel-body">
                                                <div class="panel-body">
                                                    <label class="col-sm-2 control-label">Select Permission</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
            
                                                    </div>
                                                    <div class="col-md-12" style="height:10px;"></div>
                                                    <div class="col-md-12" style="height:10px;"></div>
            
                                                    <button type="button" class="btn btn-block btn-lg btn-info">Delete Permission</button>
            
                                                </div>    
                                            </div> 
                                        </div> 
                                    </div> 
            
                                    <div class="panel panel-default"> 
                                        <div class="panel-heading"> 
                                            <h4 class="panel-title"> 
                                                <a data-toggle="collapse" data-parent="#view-perm" href="#view-perm" class="collapsed" aria-expanded="false">
                                                    View all permission
                                                </a> 
                                            </h4> 
                                        </div> 
                                        <div id="view-perm" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;"> 
                                            <div class="panel-body">
            
                                            </div> 
                                        </div> 
                                    </div> 
                                </div> 
                            </div>
            
                        </div> -->
            <div class="tab-pane" id="view-users"> 
                <p>Not available in version 1.0</p>
            </div> 
            <div class="tab-pane" id="settings"> 
                <p>Not available in version 1.0</p>
            </div> 
        </div> 
    </div>

</div>