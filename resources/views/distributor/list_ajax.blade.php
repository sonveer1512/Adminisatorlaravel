<table class="table table-sm fs--1 mb-0">
    <thead>
        <tr>
            <th class="sort align-middle" scope="col" data-sort="customer"style="width:20%; min-width:100px;">Logo</th>
            <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%; min-width:100px;">NAME</th>
            <th class="sort align-middle" scope="col" data-sort="email" style="width:20%; min-width:100px;">EMAIL</th>
            <th class="sort align-middle pe-3" style="w" scope="col" data-sort="mobile_number" style="width:20%; min-width:100px;">MOBILE NUMBER</th>
            <th class="sort align-middle text-end" scope="col" data-sort="last_active"style="width:20%; min-width:100px;">COMPANY NAME</th>
            <th class="sort align-middle text-end pe-0" scope="col" data-sort="address" style="width:20%; min-width:100px;"> ADDRESS</th>
            <th class="sort align-middle text-end pe-0" scope="col" data-sort="gst" style="width:20%; min-width:200px;"> GST NUMBER</th>
            <th class="sort align-middle text-center pe-0" scope="col" style="width:20%; min-width:200px;" >ACTION</th>
        </tr>
    </thead>
    <tbody class="list" id="table-latest-review-body">
        @foreach ($distributor as $item)

        <tr class="hover-actions-trigger btn-reveal-trigger position-static">    
            <td class="customer align-middle white-space-nowrap">
                <a class="d-flex align-items-center text-900 text-hover-1000"href="#!">
                    <div class="avatar avatar-m"style=" height: 5rem;width: 5rem;" >
                        <img src="{{asset($item->image)}}" alt="" />
                    </div>  
                </a>
            </td>  
            <td class="last_active align-middle  white-space-nowrap text-700 fw-semi-bold">{{ $item->name }}</td> 
            <td class="email align-middle white-space-nowrap text-right"><a class="fw-semi-bold"href="mailto:raymond@example.com">{{ $item->email }}</a></td>
            <td class="mobile_number align-middle white-space-nowrap text-center" ><a class="fw-bold text-1100" >{{ $item->mobile }}</a></td>
            <td class="last_active align-middle text-center white-space-nowrap text-700">{{ $item->c_name }}</td>
            <td class="joined align-middle white-space-nowrap text-700 text-center">{{ $item->c_address }}</td>
            <td class="joined align-middle white-space-nowrap text-700 text-end">{{ $item->c_gst }}</td>
            <td class="joined align-middle white-space-nowrap text-700 text-center">
                @if ($item->flag == 1)
                <button class="btn btn-sm btn-success" data-bs-target="#deletepopup" data-bs-toggle="modal" onclick="deletepopup('{{ $item->id }}','admin','activate')"><i class="fas fa-check"></i></button>
                @else
                <button type="button" class="btn btn-sm btn-info" data-bs-target="#open_distributor_edit" data-bs-toggle="modal" onclick="distributor_edit('{{ $item->id}}')"><i class="far fa-edit"></i></button>
                <button class="btn btn-sm btn-warning" data-bs-target="#deletepopup" data-bs-toggle="modal" onclick="deletepopup('{{ $item->id }}','admin','deactivate')"><i class="fa fa-warning"></i></button>
                @endif
                <button class="btn btn-sm  btn-danger" data-bs-target="#deletepopup" data-bs-toggle="modal" onclick="deletepopup('{{ $item->id }}','admin','delete')"><i class="fa fa-trash"></i></button>
                <button class="btn btn-sm btn-warning" data-bs-target="#chnagepass" data-bs-toggle="modal"  onclick="changepass_update('{{ $item->id}}')"><i class="fas fa-key"></i></button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>