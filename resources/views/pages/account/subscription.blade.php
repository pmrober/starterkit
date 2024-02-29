<x-default-layout>

    @section('title')
        Permissions
    @endsection

    @section('breadcrumbs')
        {{ Breadcrumbs::render('user-management.permissions.index') }}
    @endsection

    
        <div class="mb-4">
           <h2 class="mb-0 h3 fs-2x">Datos de suscripción</h2>
        </div>

        <div class="card border-0 mb-4 shadow-sm">
           <div class="card-body p-lg-5">
              <div class="mb-6 d-lg-flex align-items-center justify-content-between">
                 <h3 class="mb-0 fs-2">Plan actual</h3>
                 <div class="mt-3 mt-lg-0 d-md-flex">
                    <a href="#" class="btn btn-light me-2">Cancelar suscripción</a>
                    <a href="{{ route('prices') }}" class="btn btn-outline-primary">
                       Cambiar de plan
                    </a>
                 </div>
              </div>
              <div class="row gx-4">
                 <div class="col-lg-6">
                    <div class="card border-0 mb-4 mb-lg-0 bg-light-subtle">
                       <div class="card-body py-lg-3 px-lg-4">
                          <div class="mb-5">
                             <h6>Current monthly bill</h6>
                             <h4>$19.00</h4>
                          </div>

                          <a href="#" class="icon-link icon-link-hover text-primary">
                             Switch to yearly billing
                             <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                             </svg>
                          </a>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="card border-0 mb-4 mb-lg-0 bg-light-subtle">
                       <div class="card-body py-lg-3 px-lg-4">
                          <div class="mb-5">
                             <h6>Next payment due</h6>
                             <h4>30 Jan, 2024</h4>
                          </div>

                          <a href="#" class="icon-link icon-link-hover text-primary">
                             View payment history
                             <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                             </svg>
                          </a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="card border-0 mb-4 shadow-sm">
           <div class="card-body p-lg-5">
              <div class="mb-5">
                <h3 class="mb-0 fs-2">Métodos de pago</h3>
                 <p class="fs-6 mb-0">The block theme notification system notifies you of important events such as replies, mentions, updates, etc.</p>
              </div>
              <div class="border py-3 px-4 rounded-3 mb-3">
                 <div class="d-flex justify-content-between">
                    <div class="d-flex">
                       <img src="./assets/images/landings/account/visa.svg" alt="card" class="me-3">
                       <div>
                          <h6 class="mb-0">Visa ending in 1234</h6>
                          <small>Expires in 03/2025</small>
                       </div>
                    </div>
                    <div class="d-flex align-items-center">
                       <span class="dropdown dropstart">
                          <a class="text-reset" href="#" role="button" id="paymentDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                             <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                             </svg>
                          </a>
                          <span class="dropdown-menu" aria-labelledby="paymentDropdown1">
                             <span class="dropdown-header">Setting</span>
                             <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                   <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                   <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                </svg>
                                <span class="ms-2">Edit</span>
                             </a>
                             <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                   <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
                                   <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
                                </svg>
                                <span class="ms-2">Remove</span>
                             </a>
                             <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                   <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"></path>
                                   <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"></path>
                                </svg>
                                <span class="ms-2">Make it Primary</span>
                             </a>
                          </span>
                       </span>
                    </div>
                 </div>
              </div>
              <div class="border py-3 px-4 rounded-3">
                 <div class="d-flex justify-content-between">
                    <div class="d-flex">
                       <img src="./assets/images/landings/account/mastercard.svg" alt="card" class="me-3">
                       <div>
                          <h6 class="mb-0">Master ending in 1234</h6>
                          <small>Expires in 03/2026</small>
                       </div>
                    </div>
                    <div class="d-flex align-items-center">
                       <span class="dropdown dropstart">
                          <a class="text-reset" href="#" role="button" id="paymentDropdown2" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                             <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path>
                             </svg>
                          </a>
                          <span class="dropdown-menu" aria-labelledby="paymentDropdown2">
                             <span class="dropdown-header">Setting</span>
                             <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                   <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                   <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                                </svg>
                                <span class="ms-2">Edit</span>
                             </a>
                             <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                   <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"></path>
                                   <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"></path>
                                </svg>
                                <span class="ms-2">Remove</span>
                             </a>
                             <a class="dropdown-item" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                   <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"></path>
                                   <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"></path>
                                </svg>
                                <span class="ms-2">Make it Primary</span>
                             </a>
                          </span>
                       </span>
                    </div>
                 </div>
              </div>
              <a href="#" class="btn btn-outline-primary mt-4" data-bs-toggle="modal" data-bs-target="#paymentModal">Add Payment Method</a>
           </div>
        </div>
        <div class="card border-0 mb-4 shadow-sm">
           <div class="card-body p-lg-5">
              <div class="mb-5">
                 <h4 class="mb-1">Invoice History</h4>
                 <p class="fs-6 mb-0">The Invoice History Report is needed to justify the balance for a given range of invoices.</p>
              </div>

              <ul class="list-group list-group-flush mb-0">
                 <li class="list-group-item px-0 py-3 border-top">
                    <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                       <span>01 Feb 2023</span>
                       <span>$26.96</span>
                       <a href="#">PDF</a>
                    </div>
                 </li>
                 <li class="list-group-item px-0 py-3">
                    <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                       <span>31 Jan 2023</span>
                       <span>$34.30</span>
                       <a href="#">PDF</a>
                    </div>
                 </li>
                 <li class="list-group-item px-0 py-3">
                    <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                       <span>30 Jan 2023</span>
                       <span>$93.10</span>
                       <a href="#">PDF</a>
                    </div>
                 </li>
                 <li class="list-group-item px-0 py-3">
                    <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                       <span>29 Jan 2023</span>
                       <span>$44.39</span>
                       <a href="#">PDF</a>
                    </div>
                 </li>
                 <li class="list-group-item px-0 py-3 border-bottom">
                    <div class="d-flex justify-content-between text-dark fw-semibold fs-6">
                       <span>23 Jan 2023</span>
                       <span>$26.96</span>
                       <a href="#">PDF</a>
                    </div>
                 </li>
              </ul>

              <div class="mt-4">
                 <a href="#" class="icon-link icon-link-hover">
                    View All Invoices
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                       <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                    </svg>
                 </a>
              </div>
           </div>
        </div>
        
     

</x-default-layout>