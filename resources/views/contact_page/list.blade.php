@extends('layout.app')

@section('app')
<div class="page-content">

            <div class="card radius-10">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div>
                        <h6 class="mb-0">Contact list</h6>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:;">Action</a>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Another action</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
                    <div class="card-body">
                    <div class="table-responsive">
                    <table class="table align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Action</th>
                        </tr>
                        </thead>
                        <tbody><tr>
                        <td>Iphone 5</td>
                        <td>872045773</td>
                            <td>admin@gmail.com</td>
                            <td style="width: 100px;">
                                <button type="button" class="btn btn-info px-5 btn-sm"><i class="fadeIn animated bx bx-pencil text-white"></i></button>
                                <button type="button" class="btn btn-danger px-5  btn-sm"><i class="fadeIn animated bx bx-trash-alt"></i></button>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
                    </div>
            </div>

    </div>
@endsection
