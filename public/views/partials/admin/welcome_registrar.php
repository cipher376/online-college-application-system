
<style>
    .main{
        margin-top: 20px;
    }
    td{
        cursor: pointer;
    }
    .form-control{
        border:none;

    }
</style>
<div class="col-md-9 col-lg-9" style="position:fixed; z-index: 3;">
    <form>
        <div class="form-control col-md-12 col-lg-12">
            <label class='col-md-7 col-lg-7' style="color:#797979;"
                   ng-bind="'Selected Applicant: '+selectedApplicant.id"></label>
            <select class='col-md-3 col-lg-3' style="height: 30px; 
                    margin-top: -3px; border: none;" id="action">
                <option selected value='default'>Action</option>
                <option value='View'>View</option>
                <option value='Delete'>Delete</option>
                <option value='Process'>Process</option>
                <option value='Unprocess'>Un-process</option>
            </select>
            <button class="col-md-2 col-lg-2" style="margin-top: -1px; 
                    border:none;" ng-click="performAction()">Go</button>
        </div>
    </form>
    <hr class="col-md-12 col-lg-12">
</div>
<div class="main col-md-12 col-lg-12" style="margin-top: 70px" 
     ng-controller="RegistrarController" ultimate-datatable="datatable">

</div>