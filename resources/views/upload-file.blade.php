@extends('layout.layout-upload')
@section('page-title')
    Upload file
@endsection
@section('upload-content')
    <table role="presentation" class="table table-striped clearfix">
        <tbody class="files">
        <tr class="template-upload fade in">
            <td>
                <span class="preview"></span>
            </td>
            <td>
                <p class="name">Do-Huy-Hanh-PHP-CV.xlsx</p>
                <strong class="error label label-danger">File type not allowed</strong>
            </td>
            <td>
                <p class="size">8.41 KB</p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"
                     aria-valuenow="0">
                    <div class="progress-bar progress-bar-success" style="width: 60%;"></div>
                </div>
            </td>
            <td>
                <button class="btn blue start" disabled="">
                    <i class="fa fa-upload"></i>
                    <span>Start</span>
                </button>
                <button class="btn red cancel">
                    <i class="fa fa-ban"></i>
                    <span>Cancel</span>
                </button>
            </td>
        </tr>
        </tbody>
    </table>
@endsection