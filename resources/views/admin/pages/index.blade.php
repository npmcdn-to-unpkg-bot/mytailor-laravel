@extends('layouts.template.default')

@section('pagetitle', 'Pages')

@section('bg', 'grey60')

@section('main')

<div class="mt-portlet-wrapper mt-card">
   <div class="table-scrollable">
            <table class=" table-striped mdl-data-table " role="grid" aria-describedby="sample_1_info">
               <thead>
                  <tr role="row"><th class="sorting_disabled" rowspan="1" colspan="1" aria-label="
                        
                     " style="width: 65px;">
                        <div class="checker"><span><input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"></span></div>
                     </th><th class="sorting_asc" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                        Username
                     : activate to sort column descending" style="width: 143px;">
                        Username
                     </th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
                        Email
                     : activate to sort column ascending" style="width: 217px;">
                        Email
                     </th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
                        Points
                     : activate to sort column ascending" style="width: 99px;">
                        Points
                     </th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
                        Joined
                     : activate to sort column ascending" style="width: 108px;">
                        Joined
                     </th><th class="sorting" tabindex="0" aria-controls="sample_1" rowspan="1" colspan="1" aria-label="
                        Status
                     : activate to sort column ascending" style="width: 103px;">
                        Status
                     </th></tr>
               </thead>
               <tbody>   
               <tr class="gradeX odd" role="row">
                     <td>
                        <div class="checker"><span><input type="checkbox" class="checkboxes" value="1"></span></div>
                     </td>
                     <td class="sorting_1">
                        coop
                     </td>
                     <td>
                        <a href="mailto:userwow@gmail.com">
                        good@gmail.com </a>
                     </td>
                     <td>
                        20
                     </td>
                     <td class="center">
                        19.11.2010
                     </td>
                     <td>
                        <span class="label label-sm label-success">
                        Approved </span>
                     </td>
                  </tr><tr class="gradeX even" role="row">
                     <td>
                        <div class="checker"><span><input type="checkbox" class="checkboxes" value="1"></span></div>
                     </td>
                     <td class="sorting_1">
                        foopl
                     </td>
                     <td>
                        <a href="mailto:userwow@gmail.com">
                        good@gmail.com </a>
                     </td>
                     <td>
                        20
                     </td>
                     <td class="center">
                        19.11.2010
                     </td>
                     <td>
                        <span class="label label-sm label-success">
                        Approved </span>
                     </td>
                  </tr><tr class="gradeX odd" role="row">
                     <td>
                        <div class="checker"><span><input type="checkbox" class="checkboxes" value="1"></span></div>
                     </td>
                     <td class="sorting_1">
                        fop
                     </td>
                     <td>
                        <a href="mailto:userwow@gmail.com">
                        good@gmail.com </a>
                     </td>
                     <td>
                        20
                     </td>
                     <td class="center">
                        13.11.2010
                     </td>
                     <td>
                        <span class="label label-sm label-warning">
                        Suspended </span>
                     </td>
                  </tr><tr class="gradeX even" role="row">
                     <td>
                        <div class="checker"><span><input type="checkbox" class="checkboxes" value="1"></span></div>
                     </td>
                     <td class="sorting_1">
                        goop
                     </td>
                     <td>
                        <a href="mailto:userwow@gmail.com">
                        good@gmail.com </a>
                     </td>
                     <td>
                        20
                     </td>
                     <td class="center">
                        12.11.2010
                     </td>
                     <td>
                        <span class="label label-sm label-success">
                        Approved </span>
                     </td>
                  </tr><tr class="gradeX odd" role="row">
                     <td>
                        <div class="checker"><span><input type="checkbox" class="checkboxes" value="1"></span></div>
                     </td>
                     <td class="sorting_1">
                        kop
                     </td>
                     <td>
                        <a href="mailto:userwow@gmail.com">
                        good@gmail.com </a>
                     </td>
                     <td>
                        20
                     </td>
                     <td class="center">
                        17.11.2010
                     </td>
                     <td>
                        <span class="label label-sm label-success">
                        Approved </span>
                     </td>
                  </tr></tbody>
            </table>
            </div>
      </div>
@endsection