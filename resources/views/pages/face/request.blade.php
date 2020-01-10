<div class="row">
    <div class="col-3 input-group mb-3">
        <input class="form-control" data-toggle="datepicker" placeholder="From date">
        <div class="input-group-append">
        <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-calendar-alt"></i>
        </span>
        </div>
        <div data-toggle="datepicker"></div>
    </div>
    <div class="col-3 input-group mb-3">
        <input class="form-control" data-toggle="datepicker" placeholder="To date">
        <div class="input-group-append">
        <span class="input-group-text" id="basic-addon2">
            <i class="fas fa-calendar-alt"></i>
        </span>
        </div>
        <div data-toggle="datepicker"></div>
    </div>
    <div class="col-3">
       <span>Number of row: </span>
        <select class="custom-select" style="width: 50%;">
            <option selected>15</option>
            <option value="1">20</option>
            <option value="2">25</option>
            <option value="3">30</option>
        </select>
    </div>
    <div class="col-3">
        <div class="input-group">
            <input type="search" placeholder="Searching" aria-describedby="button-addon1" class="form-control border-0 bg-light">
            <div class="input-group-append">
                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <th>N</th>
                <th>date</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>01/01/2020</td>
                    <td>Sarady Loeung</td>
                    <td>sarady.loeung@gmail.com</td>
                    <td>0962242432</td>
                    <td>
                        <button type="button" class="btn btn-sm btn-primary">
                            <i class="far fa-check-square"></i>
                        </button>
                        <button type="submit" class="btn btn-sm btn-danger delete_user">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
