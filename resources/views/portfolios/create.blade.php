@extends('layouts.app')

@section('title', 'Create Portfolio')

@section('content')

<div class="form-page">

    <div class="page-heading">
        
        <h1>Create Your Portfolio</h1>
        <p>Enter your information below. You can edit it later.</p>
    </div>

    <form
        action="{{ route('portfolios.store') }}"
        method="POST"
        enctype="multipart/form-data"
        class="portfolio-form"
    >
        @csrf

        {{-- PERSONAL INFORMATION --}}
        <div class="form-section">

            <div class="form-section-title">
                <span>01</span>
                <div>
                    <h2>Personal Information</h2>
                    <p>Basic information about yourself.</p>
                </div>
            </div>

            <div class="form-grid compact-grid">

                <div class="form-group">
                    <label for="full_name">Full Name *</label>
                    <input
                        id="full_name"
                        type="text"
                        name="full_name"
                        value="{{ old('full_name') }}"
                        placeholder="Juan Dela Cruz"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="juan@example.com"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input
                        id="contact_number"
                        type="text"
                        name="contact_number"
                        value="{{ old('contact_number') }}"
                        placeholder="+63 912 345 6789"
                    >
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input
                        id="address"
                        type="text"
                        name="address"
                        value="{{ old('address') }}"
                        placeholder="Cebu City, Philippines"
                    >
                </div>

                <div class="form-group full">
                    <label for="profile_picture">Profile Picture</label>
                    <input
                        id="profile_picture"
                        type="file"
                        name="profile_picture"
                        accept=".jpg,.jpeg,.png,.webp"
                    >
                    <small>Maximum file size: 2MB</small>
                </div>

                <div class="form-group full">
                    <label for="about_me">About Me</label>
                    <textarea
                        id="about_me"
                        name="about_me"
                        rows="4"
                        placeholder="Tell visitors about yourself..."
                    >{{ old('about_me') }}</textarea>
                </div>

            </div>
        </div>

        {{-- EDUCATION --}}
        <div class="form-section">
            <div class="form-section-title">
                <span>02</span>
                <div>
                    <h2>Educational Background</h2>
                    <p>Add your educational history.</p>
                </div>
            </div>

            <div class="form-group">
                <textarea
                    name="education"
                    rows="4"
                    placeholder="Bachelor of Science in Information Technology&#10;University Name&#10;2022 - 2026"
                >{{ old('education') }}</textarea>
            </div>
        </div>

        {{-- SKILLS --}}
        <div class="form-section">
            <div class="form-section-title">
                <span>03</span>
                <div>
                    <h2>Skills</h2>
                    <p>List your skills.</p>
                </div>
            </div>

            <div class="form-group">
                <textarea
                    name="skills"
                    rows="3"
                    placeholder="Laravel, PHP, HTML, CSS, JavaScript..."
                >{{ old('skills') }}</textarea>
            </div>
        </div>

        {{-- PROJECTS --}}
        <div class="form-section">
            <div class="form-section-title">
                <span>04</span>
                <div>
                    <h2>Projects</h2>
                    <p>Describe your projects.</p>
                </div>
            </div>

            <div class="form-group">
                <textarea
                    name="projects"
                    rows="4"
                    placeholder="Project Name&#10;Description&#10;Technologies Used"
                >{{ old('projects') }}</textarea>
            </div>
        </div>

        {{-- WORK EXPERIENCE --}}
        <div class="form-section">
            <div class="form-section-title">
                <span>05</span>
                <div>
                    <h2>Work Experience</h2>
                    <p>Add your work or internship experience.</p>
                </div>
            </div>

            <div class="form-group">
                <textarea
                    name="work_experience"
                    rows="4"
                    placeholder="Company Name&#10;Position&#10;Description&#10;2025 - Present"
                >{{ old('work_experience') }}</textarea>
            </div>
        </div>

        {{-- SOCIAL LINKS --}}
        <div class="form-section">
            <div class="form-section-title">
                <span>06</span>
                <div>
                    <h2>Social Links</h2>
                    <p>Add your online profiles.</p>
                </div>
            </div>

            <div class="form-grid compact-grid">

                <div class="form-group">
                    <label for="website">Website</label>
                    <input
                        id="website"
                        type="url"
                        name="website"
                        value="{{ old('website') }}"
                        placeholder="https://example.com"
                    >
                </div>

                <div class="form-group">
                    <label for="github">GitHub</label>
                    <input
                        id="github"
                        type="url"
                        name="github"
                        value="{{ old('github') }}"
                        placeholder="https://github.com/username"
                    >
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input
                        id="facebook"
                        type="url"
                        name="facebook"
                        value="{{ old('facebook') }}"
                        placeholder="https://facebook.com/username"
                    >
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input
                        id="instagram"
                        type="url"
                        name="instagram"
                        value="{{ old('instagram') }}"
                        placeholder="https://instagram.com/username"
                    >
                </div>

                <div class="form-group full">
                    <label for="linkedin">LinkedIn</label>
                    <input
                        id="linkedin"
                        type="url"
                        name="linkedin"
                        value="{{ old('linkedin') }}"
                        placeholder="https://linkedin.com/in/username"
                    >
                </div>

            </div>
        </div>

        {{-- FORM ACTIONS --}}
        <div class="form-actions">
            <a href="{{ route('portfolios.index') }}" class="btn btn-light">
                Cancel
            </a>

            <button type="submit" class="btn btn-primary">
                Save Portfolio →
            </button>
        </div>

    </form>
</div>

@endsection
