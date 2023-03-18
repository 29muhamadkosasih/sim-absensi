@extends('layouts.apps')
@section('title', 'Absensi')
@section('content')
<div class="row">
    <div class="offset-2 col-xs-8 col-sm-8 col-md-8">
        <div class="card">
            <div class="card-header border-bottom mb-2">
                <h4 class="card-title">Detail </h4>
            </div>
            <div class="card-body">
                <div class="user-avatar-section">
                    <div class="d-flex align-items-center flex-column">
                        <img class="img-fluid rounded mt-3 mb-2"
                            src="../../../app-assets/images/portrait/small/avatar-s-2.jpg" height="110" width="110"
                            alt="User avatar">
                        <div class="user-info text-center">
                            <h4>Gertrude Barton</h4>
                            <span class="badge bg-light-secondary">Author</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-around my-2 pt-75">
                    <div class="d-flex align-items-start me-2">
                        <span class="badge bg-light-primary p-75 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-check font-medium-2">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </span>
                        <div class="ms-75">
                            <h4 class="mb-0">1.23k</h4>
                            <small>Tasks Done</small>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <span class="badge bg-light-primary p-75 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-briefcase font-medium-2">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                        </span>
                        <div class="ms-75">
                            <h4 class="mb-0">568</h4>
                            <small>Projects Done</small>
                        </div>
                    </div>
                </div>
                <div class="info-container" style="text-align: center">
                    <ul class="list-unstyled">
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Username:</span>
                            <span>violet.dev</span>
                        </li>
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Billing Email:</span>
                            <span>vafgot@vultukir.org</span>
                        </li>
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Status:</span>
                            <span class="badge bg-light-success">Active</span>
                        </li>
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Role:</span>
                            <span>Author</span>
                        </li>
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Tax ID:</span>
                            <span>Tax-8965</span>
                        </li>
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Contact:</span>
                            <span>+1 (609) 933-44-22</span>
                        </li>
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Language:</span>
                            <span>English</span>
                        </li>
                        <li class="mb-75">
                            <span class="fw-bolder me-25">Country:</span>
                            <span>Wake Island</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-body">
                <ul class="timeline">
                    <li class="timeline-item">
                        <span class="timeline-point timeline-point-indicator"></span>
                        <div class="timeline-event">
                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                <h6>12 Invoices have been paid</h6>
                                <span class="timeline-event-time">12 min ago</span>
                            </div>
                            <p>Invoices have been paid to the company.</p>
                            <div class="d-flex flex-row align-items-center">
                                <img class="me-1" src="../../../app-assets/images/icons/file-icons/pdf.png"
                                    alt="invoice" height="23">
                                <span>invoice.pdf</span>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-point timeline-point-secondary timeline-point-indicator"></span>
                        <div class="timeline-event">
                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                <h6>Client Meeting</h6>
                                <span class="timeline-event-time">45 min ago</span>
                            </div>
                            <p>Project meeting with john @10:15am.</p>
                            <div class="d-flex flex-row align-items-center">
                                <div class="avatar">
                                    <img src="../../../app-assets/images/avatars/12-small.png" alt="avatar" height="38"
                                        width="38">
                                </div>
                                <div class="ms-50">
                                    <h6 class="mb-0">John Doe (Client)</h6>
                                    <span>CEO of Infibeam</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-point timeline-point-success timeline-point-indicator"></span>
                        <div class="timeline-event">
                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                <h6>Financial Report</h6>
                                <span class="timeline-event-time">2 hours ago</span>
                            </div>
                            <p class="mb-50">Click the button below to read financial reports</p>
                            <button class="btn btn-outline-primary btn-sm waves-effect" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true"
                                aria-controls="collapseExample">
                                Show Report
                            </button>
                            <div class="collapse" id="collapseExample">
                                <ul class="list-group list-group-flush mt-1">
                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                        <span>Last Year's Profit : <span class="fw-bold">$20000</span></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-share-2 cursor-pointer font-medium-2">
                                            <circle cx="18" cy="5" r="3"></circle>
                                            <circle cx="6" cy="12" r="3"></circle>
                                            <circle cx="18" cy="19" r="3"></circle>
                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                        </svg>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                        <span> This Year's Profit : <span class="fw-bold">$25000</span></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-share-2 cursor-pointer font-medium-2">
                                            <circle cx="18" cy="5" r="3"></circle>
                                            <circle cx="6" cy="12" r="3"></circle>
                                            <circle cx="18" cy="19" r="3"></circle>
                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                        </svg>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                        <span> Last Year's Commission : <span class="fw-bold">$5000</span></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-share-2 cursor-pointer font-medium-2">
                                            <circle cx="18" cy="5" r="3"></circle>
                                            <circle cx="6" cy="12" r="3"></circle>
                                            <circle cx="18" cy="19" r="3"></circle>
                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                        </svg>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                        <span> This Year's Commission : <span class="fw-bold">$7000</span></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-share-2 cursor-pointer font-medium-2">
                                            <circle cx="18" cy="5" r="3"></circle>
                                            <circle cx="6" cy="12" r="3"></circle>
                                            <circle cx="18" cy="19" r="3"></circle>
                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                        </svg>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between flex-wrap">
                                        <span> This Year's Total Balance : <span class="fw-bold">$70000</span></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-share-2 cursor-pointer font-medium-2">
                                            <circle cx="18" cy="5" r="3"></circle>
                                            <circle cx="6" cy="12" r="3"></circle>
                                            <circle cx="18" cy="19" r="3"></circle>
                                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                                        </svg>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-point timeline-point-warning timeline-point-indicator"></span>
                        <div class="timeline-event">
                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                <h6 class="mb-50">Interview Schedule</h6>
                                <span class="timeline-event-time">03:00 PM</span>
                            </div>
                            <p>Have to interview Katy Turner for the developer job.</p>
                            <hr>
                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="avatar me-1">
                                        <img src="../../../app-assets/images/avatars/1-small.png" alt="Avatar"
                                            height="32" width="32">
                                    </div>
                                    <span>
                                        <p class="mb-0">Katy Turner</p>
                                        <span class="text-muted">Javascript Developer</span>
                                    </span>
                                </div>
                                <div class="d-flex align-items-center cursor-pointer mt-sm-0 mt-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-message-square me-1">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-phone-call">
                                        <path
                                            d="M15.05 5A5 5 0 0 1 19 8.95M15.05 1A9 9 0 0 1 23 8.94m-1 7.98v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                        <div class="timeline-event">
                            <div class="d-flex justify-content-between flex-sm-row flex-column mb-sm-0 mb-1">
                                <h6>Online Store</h6>
                                <span class="timeline-event-time">03:00PM</span>
                            </div>
                            <p>
                                Develop an online store of electronic devices for the provided layout, as well as
                                develop a mobile
                                version of it. The must be compatible with any CMS.
                            </p>
                            <div class="d-flex justify-content-between flex-wrap flex-sm-row flex-column">
                                <div>
                                    <p class="text-muted mb-50">Developers</p>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar bg-light-primary avatar-sm me-50">
                                            <span class="avatar-content">A</span>
                                        </div>
                                        <div class="avatar bg-light-success avatar-sm me-50">
                                            <span class="avatar-content">B</span>
                                        </div>
                                        <div class="avatar bg-light-danger avatar-sm">
                                            <span class="avatar-content">C</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-sm-0 mt-1">
                                    <p class="text-muted mb-50">Deadline</p>
                                    <p class="mb-0">20 Dec 2077</p>
                                </div>
                                <div class="mt-sm-0 mt-1">
                                    <p class="text-muted mb-50">Budget</p>
                                    <p class="mb-0">$50000</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-item">
                        <span class="timeline-point timeline-point-info timeline-point-indicator"></span>
                        <div class="timeline-event">
                            <div class="d-flex justify-content-between align-items-center mb-50">
                                <h6>Designing UI</h6>
                                <div>
                                    <span class="badge rounded-pill badge-light-primary">Design</span>
                                </div>
                            </div>
                            <p>
                                Our main goal is to design a new mobile application for our client. The customer wants a
                                clean &amp; flat
                                design.
                            </p>
                            <div>
                                <span class="text-muted">Participants</span>
                                <div class="avatar-group mt-50">
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom"
                                        title="" class="avatar pull-up" data-bs-original-title="Vinnie Mostowy">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-5.jpg" alt="Avatar"
                                            height="30" width="30">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom"
                                        title="" class="avatar pull-up" data-bs-original-title="Elicia Rieske">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-7.jpg" alt="Avatar"
                                            height="30" width="30">
                                    </div>
                                    <div data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="bottom"
                                        title="" class="avatar pull-up" data-bs-original-title="Julee Rossignol">
                                        <img src="../../../app-assets/images/portrait/small/avatar-s-10.jpg"
                                            alt="Avatar" height="30" width="30">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="d-flex justify-content-center pt-2">
                    <a href="javascript:;" class="btn btn-primary me-1 waves-effect waves-float waves-light"
                        data-bs-target="#editUser" data-bs-toggle="modal">
                        Edit
                    </a>
                    <a href="javascript:;" class="btn btn-outline-danger suspend-user waves-effect">Suspended</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
