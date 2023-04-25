@extends('layouts.master')

@section('master')
    <div class="row mb-4">
        <div class="accordion accordion-flush" id="accordionFlushExample2">
            <div class="accordion-item border shadow-sm">
                <h2 class="accordion-header " id="flush-heading2">
                    <button class="accordion-button bg-light-bronze collapsed fw-bold text-secondary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                        Contact Emails 📩
                    </button>
                </h2>
                <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2"
                    data-bs-parent="#accordionFlushExample2" style="">
                    <div class="accordion-body px-2">
                        <table class="table mb-0 table-hover">
                            <thead class="bg-light-bronze">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">IP</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Created Time</th>
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
                                        <td>{{ $contact->user_ip }}</td>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
