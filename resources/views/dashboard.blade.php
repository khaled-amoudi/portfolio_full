@extends('layouts.master')

@section('master')
    <div class="row mb-4">
        <div class="accordion accordion-flush" id="accordionFlushExample3">
            <div class="accordion-item border shadow-sm">
                <h2 class="accordion-header " id="flush-heading3">
                    <button class="accordion-button bg-light-bronze collapsed fw-bold text-secondary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                        Contact Emails 📩
                    </button>
                </h2>
                <div id="flush-collapse3" class="accordion-collapse collapse show" aria-labelledby="flush-heading3"
                    data-bs-parent="#accordionFlushExample3" style="">
                    <div class="accordion-body px-2">
                        <table class="table mb-0 table-hover">
                            <thead class="bg-light-bronze">
                                <tr class="text-secondary">
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Created</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contact_emails as $contact)
                                    <tr>
                                        <th scope="row">{{ $contact->id }}</th>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email_address }}</td>
                                        <td>{{ $contact->phone_number }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>{{ $contact->created_at->diffForHumans() }}</td>
                                        <td>

                                            <form method="POST" action="{{ route('contact.delete', $contact->id) }}">
                                                @csrf
                                                @method('delete')
                                                <a href="{{ route('contact.delete', $contact->id) }}"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                    <i class="bi bi-trash-fill text-danger"></i>
                                                </a>
                                            </form>
                                        </a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col-12 col-md-6">
            <div class="accordion accordion-flush" id="accordionFlushExample4">
                <div class="accordion-item border shadow-sm">
                    <h2 class="accordion-header " id="flush-heading4">
                        <button class="accordion-button bg-light-bronze collapsed fw-bold text-secondary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                            Settlers Emails ✨
                        </button>
                    </h2>
                    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4"
                        data-bs-parent="#accordionFlushExample4" style="">
                        <div class="accordion-body px-2">
                            <table class="table mb-0 table-hover">
                                <thead class="bg-light-bronze">
                                    <tr class="text-secondary">
                                        <th scope="col">#</th>
                                        <th scope="col">Settler Email</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($settlers as $settler)
                                        <tr>
                                            <th scope="row">{{ $settler->id }}</th>
                                            <td>{{ $settler->settler_email }}</td>
                                            <td>

                                                <form method="POST" action="{{ route('settler.delete', $settler->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('settler.delete', $settler->id) }}"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                        <i class="bi bi-trash-fill text-danger"></i>
                                                    </a>
                                                </form>
                                            </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">There Is No Settlers Yet</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-12 col-md-6">
            <div class="accordion accordion-flush" id="accordionFlushExample5">
                <div class="accordion-item border shadow-sm">
                    <h2 class="accordion-header " id="flush-heading5">
                        <button class="accordion-button bg-light-bronze collapsed fw-bold text-secondary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                            IP's to block 🚫
                        </button>
                    </h2>
                    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5"
                        data-bs-parent="#accordionFlushExample5" style="">
                        <div class="accordion-body px-2">
                            <table class="table mb-0 table-hover">
                                <thead class="bg-light-bronze">
                                    <tr class="text-secondary">
                                        <th scope="col">IP</th>
                                        <th scope="col">NO.Requests</th>
                                        <th scope="col">Created</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($unsafe_contact_ips as $ip)
                                        <tr>
                                            <td>{{ $ip->user_ip }}</td>
                                            <td>{{ $ip->total }}</td>
                                            <td>{{ $ip->last_created_at }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">There Is No Unsafe Ip's</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <div class="row mb-4">
        <div class="accordion accordion-flush" id="accordionFlushExample1">
            <div class="accordion-item border shadow-sm">
                <h2 class="accordion-header " id="flush-heading1">
                    <button class="accordion-button bg-light-bronze collapsed fw-bold text-secondary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                        Show Fixed Data
                    </button>
                </h2>
                <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1"
                    data-bs-parent="#accordionFlushExample1" style="">
                    <div class="accordion-body">
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <b>Email : </b><span>khaled.amoudi00@gmail.com</span>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <b>Phone number : </b><span>00972597173494</span>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <b>Twitter Link : </b><span><a target="_blank" href="https://twitter.com/Khaledamoudii">Khaledamoudii</a></span>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <b>LinkedIn Link : </b><span><a target="_blank" href="https://www.linkedin.com/in/khaledamoudi/">LinkedIn Profile (khaledamoudi)</a></span>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <b>Upwork Link : </b><span><a target="_blank" href="https://www.upwork.com/freelancers/~019f0db70103a732c8">Upwork Profile (~019f0db70103a732c8)</a></span>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <b>Freelancer Link : </b><span><a target="_blank" href="https://www.freelancer.com/u/khaledAmoudi">Freelancer Profile (khaledAmoudi)</a></span>
                            </div>
                            <div class="col-12 col-md-6 mb-3">
                                <b>Mostaqel Link : </b><span><a target="_blank" href="https://mostaql.com/u/Khaled_Amoudi">Mostaqel Profile (Khaled_Amoudi)</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="accordion accordion-flush" id="accordionFlushExample2">
            <div class="accordion-item border shadow-sm">
                <h2 class="accordion-header " id="flush-heading2">
                    <button class="accordion-button bg-light-bronze collapsed fw-bold text-secondary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                        Static Actions
                    </button>
                </h2>
                <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2"
                    data-bs-parent="#accordionFlushExample2" style="">
                    <div class="accordion-body px-2 py-3">
                        <a class="btn btn-sm bg-purple text-white" href="{{ route('dashboard.forget_cache_home_view') }}">forget cache home-view</a>
                        <a class="btn btn-sm bg-purple text-white" href="{{ route('dashboard.forget_all_caches') }}">forget all caches</a>
                        <br>
                        {{-- <a class="mt-3 btn btn-sm bg-purple text-white" href="{{ route('dashboard.php-artisan-optimize-clear') }}">optimize:clear</a>
                        <a class="mt-3 btn btn-sm bg-purple text-white" href="{{ route('dashboard.config-routes-cache') }}">config:cache & route:cahce</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
