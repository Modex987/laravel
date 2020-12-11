@csrf
<div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input type="name" name="name" class="mb-1 form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') ?? $employee->name }}">
    @error('name')
        <small><div class="alert alert-danger" role="alert">{{ $message }}</div></small>
    @enderror
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="mb-1 form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') ?? $employee->email }}">
    @error('email')
        <small><div class="alert alert-danger" role="alert">{{ $message }}</div></small>
    @enderror
</div>
<div class="mb-3">
    <label for="active" class="form-label">Select Activity</label>
    <select name="active" id="active" class="mb-1 form-select @error('active') is-invalid @enderror">
        <option value="" selected disabled>Select</option>
        @foreach ($employee->activeOptions as $activeOptionkey => $activeOptionValue )
            <option value="{{$activeOptionkey}}" {{$employee->active === $activeOptionValue ? 'selected' : ''}}>{{$activeOptionValue}}</option>
        @endforeach

        {{-- <option value="1" {{ $employee->active ? 'selected' : '' }}>active</option>
        <option value="0" {{ !$employee->active ? 'selected' : '' }}>inactive</option> --}}
        <!-- Don't let the view generate your data -->

    </select>
    @error('active')
        <small><div class="alert alert-danger" role="alert">{{ $message }}</div></small>
    @enderror
</div>
<div class="mb-3">
    <label for="company_id" class="form-label">Select Company</label>
    <select name="company_id" id="company_id" class="mb-1 form-select @error('company_id') is-invalid @enderror">
        <option value="" selected disabled>Select</option>
        @foreach ($companies as $company)
            <option value="{{$company->id}}" {{$employee->company_id === $company->id ? 'selected' : ''}}>{{$company->name}}</option>
        @endforeach
    </select>
    @error('company_id')
        <small><div class="alert alert-danger" role="alert">{{ $message }}</div></small>
    @enderror
</div>
<input type="submit" name="submit" class="btn btn-primary" value="Submit">