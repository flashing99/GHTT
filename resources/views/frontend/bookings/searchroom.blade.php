

<div class="row">
    <div class="col-lg-12">



        <div class="card card-secondary">
            <div class="card-header">
                <h3 class="card-title">Chercher la disponibilité</h3>
            </div>
            <div class="card-body">


            <form method="POST" action="{{ route('Booking.searchRoom') }}">
                @csrf
                {{ method_field('POST')}}

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Type</label>
                    <div class="col-lg-10">
                        <select id="category" name="category" class="category form-control">
                            <option></option>
                            @foreach ($categorys as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        
                        @error('category')
                        <div class="alert alert-danger m-b-none">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Date début</label>
                    <div class="col-lg-10">
                        <input id="start_date" type="text" class="form-control @error('start_date') is-invalid @enderror" name="start_date" required autofocus placeholder="Veuillez introduire la date de début">

                        @error('start_date')
                        <div class="alert alert-danger m-b-none">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-lg-2 col-form-label">Date fin</label>
                    <div class="col-lg-10">
                        <input id="end_date" type="text" class="form-control @error('end_date') is-invalid @enderror" name="end_date" required placeholder="Veuillez introduire la date de fin">

                        @error('end_date')
                        <div class="alert alert-danger m-b-none">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>




                <div class="form-group row">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Enregistrer</button>
                    </div>
                </div>

            </form>


            </div>
        </div>
    </div>

</div>



