
@extends('layouts.app')

@section('title', 'Edit Portfolio | Portify')

@section('content')

@if ($errors->any())
    <div class="validation-errors" role="alert" aria-live="polite">
        <strong>Please check the following:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-page edit-portfolio-page">

    <div class="page-heading edit-page-heading">
        <span>UPDATE YOUR PROFILE</span>
        <h1>Edit Your Portfolio</h1>
        <p>Keep your professional information accurate and up to date.</p>
    </div>

    <form
        action="{{ route('portfolios.update', $portfolio) }}"
        method="POST"
        enctype="multipart/form-data"
        class="portfolio-form edit-portfolio-form"
    >
        @csrf
        @method('PUT')

        {{-- Preserve the current portfolio template --}}
        <input
            type="hidden"
            name="template"
            value="{{ old('template', $portfolio->template ?? 'simple') }}"
        >

        {{-- 01 Personal Information --}}
        <section class="form-section">
            <div class="form-section-title">
                <span>01</span>
                <div>
                    <h2>Personal Information</h2>
                    <p>Update your contact details and introduction.</p>
                </div>
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label for="full_name">Full Name *</label>
                    <input
                        id="full_name"
                        type="text"
                        name="full_name"
                        value="{{ old('full_name', $portfolio->full_name) }}"
                        placeholder="Juan Dela Cruz"
                        required
                    >
                    @error('full_name')
                        <small class="edit-field-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email Address *</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email', $portfolio->email) }}"
                        placeholder="juan@example.com"
                        required
                    >
                    @error('email')
                        <small class="edit-field-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input
                        id="contact_number"
                        type="text"
                        name="contact_number"
                        value="{{ old('contact_number', $portfolio->contact_number) }}"
                        placeholder="+63 912 345 6789"
                    >
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input
                        id="address"
                        type="text"
                        name="address"
                        value="{{ old('address', $portfolio->address) }}"
                        placeholder="Cebu City, Philippines"
                    >
                </div>

                <div class="form-group full">
                    <label for="profile_picture">Profile Picture</label>

                    @if($portfolio->profile_picture)
                        <div class="edit-current-picture">
                            <img
                                src="{{ asset('storage/' . $portfolio->profile_picture) }}"
                                alt="Current profile picture"
                            >
                            <span>Current profile picture</span>
                        </div>
                    @endif

                    <input
                        id="profile_picture"
                        type="file"
                        name="profile_picture"
                        accept=".jpg,.jpeg,.png,.webp"
                    >

                    <small>
                        Choose a new image only if you want to replace the current one.
                    </small>

                    @error('profile_picture')
                        <small class="edit-field-error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group full">
                    <label for="about_me">About Me</label>
                    <textarea
                        id="about_me"
                        name="about_me"
                        rows="4"
                        placeholder="Tell visitors about yourself..."
                    >{{ old('about_me', $portfolio->about_me) }}</textarea>
                </div>
            </div>
        </section>

        {{-- 02 Education --}}
        <section class="form-section">
            <div class="form-section-title">
                <span>02</span>
                <div>
                    <h2>Educational Background</h2>
                    <p>Add your education, school, and graduation year.</p>
                </div>
            </div>

            <div class="form-group">
                <label for="education">Education Details</label>
                <textarea
                    id="education"
                    name="education"
                    rows="3"
                    placeholder="Degree or course&#10;School name&#10;Year"
                >{{ old('education', $portfolio->education) }}</textarea>
            </div>
        </section>

        {{-- 03 Skills --}}
        <section class="form-section">
            <div class="form-section-title">
                <span>03</span>
                <div>
                    <h2>Skills</h2>
                    <p>Highlight your technical and professional skills.</p>
                </div>
            </div>

            <div class="form-group">
                <label for="skills">Your Skills</label>
                <textarea
                    id="skills"
                    name="skills"
                    rows="3"
                    placeholder="Laravel, PHP, HTML, CSS..."
                >{{ old('skills', $portfolio->skills) }}</textarea>
            </div>
        </section>

        {{-- 04 Projects --}}
        <section class="form-section">
            <div class="form-section-title">
                <span>04</span>
                <div>
                    <h2>Projects</h2>
                    <p>Showcase projects you have completed.</p>
                </div>
            </div>

            <div class="form-group">
                <label for="projects">Project Details</label>
                <textarea
                    id="projects"
                    name="projects"
                    rows="4"
                    placeholder="Project name&#10;Description&#10;Technologies used"
                >{{ old('projects', $portfolio->projects) }}</textarea>
            </div>
        </section>

        {{-- 05 Work Experience --}}
        <section class="form-section">
            <div class="form-section-title">
                <span>05</span>
                <div>
                    <h2>Work Experience</h2>
                    <p>Include previous jobs, internships, or relevant experience.</p>
                </div>
            </div>

            <div class="form-group">
                <label for="work_experience">Experience Details</label>
                <textarea
                    id="work_experience"
                    name="work_experience"
                    rows="4"
                    placeholder="Company name&#10;Position&#10;Description&#10;Dates"
                >{{ old('work_experience', $portfolio->work_experience) }}</textarea>
            </div>
        </section>

        {{-- 06 Social Links --}}
        <section class="form-section">
            <div class="form-section-title">
                <span>06</span>
                <div>
                    <h2>Social Links</h2>
                    <p>Help people find you online.</p>
                </div>
            </div>

            <div class="form-grid">
                <div class="form-group">
                    <label for="website">Website</label>
                    <input
                        id="website"
                        type="url"
                        name="website"
                        value="{{ old('website', $portfolio->website) }}"
                        placeholder="https://example.com"
                    >
                </div>

                <div class="form-group">
                    <label for="github">GitHub</label>
                    <input
                        id="github"
                        type="url"
                        name="github"
                        value="{{ old('github', $portfolio->github) }}"
                        placeholder="https://github.com/username"
                    >
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input
                        id="facebook"
                        type="url"
                        name="facebook"
                        value="{{ old('facebook', $portfolio->facebook) }}"
                        placeholder="https://facebook.com/username"
                    >
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input
                        id="instagram"
                        type="url"
                        name="instagram"
                        value="{{ old('instagram', $portfolio->instagram) }}"
                        placeholder="https://instagram.com/username"
                    >
                </div>

                <div class="form-group full">
                    <label for="linkedin">LinkedIn</label>
                    <input
                        id="linkedin"
                        type="url"
                        name="linkedin"
                        value="{{ old('linkedin', $portfolio->linkedin) }}"
                        placeholder="https://linkedin.com/in/username"
                    >
                </div>
            </div>
        </section>

        {{-- Save and cancel --}}
        <div class="form-actions edit-form-actions">
            <a
                href="{{ route('portfolios.index') }}"
                class="btn btn-light"
            >
                Cancel
            </a>

            <button type="submit" class="btn btn-primary">
                Save Changes →
            </button>
        </div>

    </form>
</div>

@endsection
