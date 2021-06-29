@extends('layouts/template')

@section('title', 'Rincian Usulan Revisi Anggaran')

@section('rincian')
<div id="page-wrapper">
    <div class="header">
        <h1 class="page-header">
            Rincian Usulan Revisi Anggaran
        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Monitoring Usulan Revisi Anggaran</a></li>
            <li class="active">Rincian Usulan Revisi Anggaran</li>
        </ol>

    </div>

    <h6 class="page-header">
        Filter Rincian Usulan Data Satuan Kerja
    </h6>

    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="input-field col s2">
                                <select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm">
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                </select>
                            </div>
                            <div class="input-field col s3">
                                <label class="material-icons prefix"></label>
                                <input id="satker" type="tel" class="validate">
                                <label for="satker">Satuan Kerja/Eselon I</label>
                            </div>
                            <div class="input-field col s2">
                                <label class="material-icons prefix"></label>
                                <input id="satker" type="tel" class="validate">
                                <label for="satker">Data ke-</label>
                            </div>
                            <div class="input-field col s2">
                                <label class="material-icons prefix"></label>
                                <input id="satker" type="tel" class="validate">
                                <label for="satker">Data ke-</label>
                            </div>
                            <div class="input-field col s3">
                                <button class="waves-effect waves-light btn" style="float: right;" onclick="myFunction()">OK</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" id="table" style="display: none;">


                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="input-field">
                                        <button class="waves-effect waves-light btn" style="float: right;" onclick="ExportToExcel('dataTables-example', 'datas-data')">Export</button>
                                    </div>
                                </div>
                                <div class="row"> <br>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Rendering engine</th>
                                                    <th>Browser</th>
                                                    <th>Platform(s)</th>
                                                    <th>Engine version</th>
                                                    <th>CSS grade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="gradeC">
                                                    <td>Tasman</td>
                                                    <td>Internet Explorer 5.1</td>
                                                    <td>Mac OS 7.6-9</td>
                                                    <td class="center">1</td>
                                                    <td class="center">C</td>
                                                </tr>
                                                <tr class="gradeC">
                                                    <td>Tasman</td>
                                                    <td>Internet Explorer 5.2</td>
                                                    <td>Mac OS 8-X</td>
                                                    <td class="center">1</td>
                                                    <td class="center">C</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Misc</td>
                                                    <td>NetFront 3.1</td>
                                                    <td>Embedded devices</td>
                                                    <td class="center">-</td>
                                                    <td class="center">C</td>
                                                </tr>
                                                <tr class="gradeA">
                                                    <td>Misc</td>
                                                    <td>NetFront 3.4</td>
                                                    <td>Embedded devices</td>
                                                    <td class="center">-</td>
                                                    <td class="center">A</td>
                                                </tr>
                                                <tr class="gradeX">
                                                    <td>Misc</td>
                                                    <td>Dillo 0.8</td>
                                                    <td>Embedded devices</td>
                                                    <td class="center">-</td>
                                                    <td class="center">X</td>
                                                </tr>
                                                <tr class="gradeX">
                                                    <td>Misc</td>
                                                    <td>Links</td>
                                                    <td>Text only</td>
                                                    <td class="center">-</td>
                                                    <td class="center">X</td>
                                                </tr>
                                                <tr class="gradeX">
                                                    <td>Misc</td>
                                                    <td>Lynx</td>
                                                    <td>Text only</td>
                                                    <td class="center">-</td>
                                                    <td class="center">X</td>
                                                </tr>
                                                <tr class="gradeC">
                                                    <td>Misc</td>
                                                    <td>IE Mobile</td>
                                                    <td>Windows Mobile 6</td>
                                                    <td class="center">-</td>
                                                    <td class="center">C</td>
                                                </tr>
                                                <tr class="gradeC">
                                                    <td>Misc</td>
                                                    <td>PSP browser</td>
                                                    <td>PSP</td>
                                                    <td class="center">-</td>
                                                    <td class="center">C</td>
                                                </tr>
                                                <tr class="gradeU">
                                                    <td>Other browsers</td>
                                                    <td>All others</td>
                                                    <td>-</td>
                                                    <td class="center">-</td>
                                                    <td class="center">U</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("table");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function ExportToExcel(tableID, filename = '') {
            var downloadLink;
            var dataType = 'application/vnd.ms-excel';
            var tableSelect = document.getElementById(tableID);
            var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

            // Specify file name
            filename = filename ? filename + '.xls' : 'excel_data.xls';

            // Create download link element
            downloadLink = document.createElement("a");

            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                var blob = new Blob(['\ufeff', tableHTML], {
                    type: dataType
                });
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                // Create a link to the file
                downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                // Setting the file name
                downloadLink.download = filename;

                //triggering the function
                downloadLink.click();
            }
        }
    </script>

    @endsection