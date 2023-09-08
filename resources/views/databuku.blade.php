@extends('layout.master')

@section('page', 'Data Buku')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Bordered Table</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Id Buku</th>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Penulis Buku</th>
                <th>Penerbit Buku</th>
                <th>Tahun Penerbit</th>
                <th>Stok</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1.</td>
                <td></td>
                <td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>2.</td>
                <td></td>
                <td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>3.</td>
                <td></td>
                <td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
            </tr>
            <tr>
                <td>4.</td>
                <td></td>
                <td>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
        </ul>
        </div>
    </div>
</div>
@endsection