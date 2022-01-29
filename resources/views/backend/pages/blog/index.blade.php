@extends('backend.layouts.app')

@section('title', $title)

@section('content')
<div class="col-xs-12 main">
    <div class="page-on-top">
        <!-- tables/datatable -->
        <div class="row">
            <div class="col-xs-12">
                <div class="widget">
                    <div class="row m-b-20">
                        <div class="col-xs-12">
                            <p class="color-grey-900 m-b-5">Ajax example</p>
                            <p class="color-grey-700 text-sm m-b-10">DataTables has the ability to read data from
                                virtually
                                any JSON data source that can be obtained by Ajax. This can be done, in its most simple
                                form, by setting the <code>ajax</code> option to the address of the
                                JSON data source.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="datatable-example-1_wrapper" class="dataTables_wrapper no-footer">
                                <div class="dataTables_length" id="datatable-example-1_length"><label>Show <select
                                            name="datatable-example-1_length" aria-controls="datatable-example-1"
                                            class="">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                                <div id="datatable-example-1_filter" class="dataTables_filter"><label>Search:<input
                                            type="search" class="" placeholder=""
                                            aria-controls="datatable-example-1"></label></div>
                                <table id="datatable-example-1"
                                    class="table table-hover table-striped table-bordered dataTable no-footer"
                                    role="grid" aria-describedby="datatable-example-1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-example-1"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                                style="width: 130px;">
                                                Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-example-1"
                                                rowspan="1" colspan="1"
                                                aria-label="Position: activate to sort column ascending"
                                                style="width: 164px;">Position</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-example-1"
                                                rowspan="1" colspan="1"
                                                aria-label="Office: activate to sort column ascending"
                                                style="width: 131px;">Office</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-example-1"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 102px;">Age</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-example-1"
                                                rowspan="1" colspan="1"
                                                aria-label="Start date: activate to sort column ascending"
                                                style="width: 188px;">Start date</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-example-1"
                                                rowspan="1" colspan="1"
                                                aria-label="Salary: activate to sort column ascending"
                                                style="width: 136px;">Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd">
                                            <td valign="top" colspan="6" class="dataTables_empty">Loading...</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="dataTables_info" id="datatable-example-1_info" role="status"
                                    aria-live="polite">
                                    Showing 0 to 0 of 0 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers"
                                    id="datatable-example-1_paginate"><a class="paginate_button previous disabled"
                                        aria-controls="datatable-example-1" data-dt-idx="0" tabindex="0"
                                        id="datatable-example-1_previous">Previous</a><span></span><a
                                        class="paginate_button next disabled" aria-controls="datatable-example-1"
                                        data-dt-idx="1" tabindex="0" id="datatable-example-1_next">Next</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="widget">
                    <div class="row m-b-20">
                        <div class="col-xs-12">
                            <p class="color-grey-900 m-b-5">Zero configuration example</p>
                            <p class="color-grey-700 text-sm m-b-10">DataTables has most features enabled by default, so
                                all
                                you need to do to use it with your own tables is to call the construction function:
                                <code>$().DataTable();</code>.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="datatable-example-2_wrapper" class="dataTables_wrapper">
                                <div class="dataTables_length" id="datatable-example-2_length"><label>Show <select
                                            name="datatable-example-2_length" aria-controls="datatable-example-2"
                                            class="">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="100">100</option>
                                        </select> entries</label></div>
                                <div id="datatable-example-2_filter" class="dataTables_filter"><label>Search:<input
                                            type="search" class="" placeholder=""
                                            aria-controls="datatable-example-2"></label></div>
                                <table id="datatable-example-2"
                                    class="table table-hover table-striped table-bordered dataTable" role="grid"
                                    aria-describedby="datatable-example-2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="datatable-example-2"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                                style="width: 175px;">
                                                Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-example-2"
                                                rowspan="1" colspan="1"
                                                aria-label="Position: activate to sort column ascending"
                                                style="width: 283px;">Position</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-example-2"
                                                rowspan="1" colspan="1"
                                                aria-label="Office: activate to sort column ascending"
                                                style="width: 128px;">Office</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-example-2"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 55px;">Age</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-example-2"
                                                rowspan="1" colspan="1"
                                                aria-label="Start date: activate to sort column ascending"
                                                style="width: 112px;">Start date</th>
                                            <th class="sorting" tabindex="0" aria-controls="datatable-example-2"
                                                rowspan="1" colspan="1"
                                                aria-label="Salary: activate to sort column ascending"
                                                style="width: 99px;">Salary</th>
                                        </tr>
                                    </thead>
                                    <tfoot class="hidden">
                                        <tr>
                                            <th rowspan="1" colspan="1">Name</th>
                                            <th rowspan="1" colspan="1">Position</th>
                                            <th rowspan="1" colspan="1">Office</th>
                                            <th rowspan="1" colspan="1">Age</th>
                                            <th rowspan="1" colspan="1">Start date</th>
                                            <th rowspan="1" colspan="1">Salary</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Angelica Ramos</td>
                                            <td>Chief Executive Officer (CEO)</td>
                                            <td>London</td>
                                            <td>47</td>
                                            <td>2009/10/09</td>
                                            <td>$1,200,000</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                            <td>$86,000</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Bradley Greer</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>41</td>
                                            <td>2012/10/13</td>
                                            <td>$132,000</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Brenden Wagner</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td>28</td>
                                            <td>2011/06/07</td>
                                            <td>$206,850</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Brielle Williamson</td>
                                            <td>Integration Specialist</td>
                                            <td>New York</td>
                                            <td>61</td>
                                            <td>2012/12/02</td>
                                            <td>$372,000</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Bruno Nash</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td>38</td>
                                            <td>2011/05/03</td>
                                            <td>$163,500</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Caesar Vance</td>
                                            <td>Pre-Sales Support</td>
                                            <td>New York</td>
                                            <td>21</td>
                                            <td>2011/12/12</td>
                                            <td>$106,450</td>
                                        </tr>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Cara Stevens</td>
                                            <td>Sales Assistant</td>
                                            <td>New York</td>
                                            <td>46</td>
                                            <td>2011/12/06</td>
                                            <td>$145,600</td>
                                        </tr>
                                        <tr role="row" class="even">
                                            <td class="sorting_1">Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                            <td>$433,060</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="dataTables_info" id="datatable-example-2_info" role="status"
                                    aria-live="polite">
                                    Showing 1 to 10 of 57 entries</div>
                                <div class="dataTables_paginate paging_simple_numbers"
                                    id="datatable-example-2_paginate"><a class="paginate_button previous disabled"
                                        aria-controls="datatable-example-2" data-dt-idx="0" tabindex="0"
                                        id="datatable-example-2_previous">Previous</a><span><a
                                            class="paginate_button current" aria-controls="datatable-example-2"
                                            data-dt-idx="1" tabindex="0">1</a><a class="paginate_button "
                                            aria-controls="datatable-example-2" data-dt-idx="2" tabindex="0">2</a><a
                                            class="paginate_button " aria-controls="datatable-example-2" data-dt-idx="3"
                                            tabindex="0">3</a><a class="paginate_button "
                                            aria-controls="datatable-example-2" data-dt-idx="4" tabindex="0">4</a><a
                                            class="paginate_button " aria-controls="datatable-example-2" data-dt-idx="5"
                                            tabindex="0">5</a><a class="paginate_button "
                                            aria-controls="datatable-example-2" data-dt-idx="6"
                                            tabindex="0">6</a></span><a class="paginate_button next"
                                        aria-controls="datatable-example-2" data-dt-idx="7" tabindex="0"
                                        id="datatable-example-2_next">Next</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- tables/datatable -->
    </div>
</div>
@endsection
