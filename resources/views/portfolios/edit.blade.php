@extends('layouts.app')

@section('title', 'Edit Portfolio')

@section('content')

<div class="form-page">

```
<div class="page-heading">

    <span>EDIT</span>

    <h1>
        Edit Your Portfolio
    </h1>

    <p>
        Update your portfolio information below.
    </p>

</div>


<form
    action="{{ route('portfolios.update', $portfolio) }}"
    method="POST"
    enctype="multipart/form-data"
    class="portfolio-form"
>

    @csrf

    @method('PUT')


    <!-- PERSONAL INFORMATION -->

    <div class="form-section">

        <div class="form-section-title">

            <span>01</span>

            <div>

                <h2>
                    Personal Information
                </h2>

                <p>
                    Update your basic information.
                </p>

            </div>

        </div>


        <div class="form-grid">

            <!-- FULL NAME -->

            <div class="form-group full">

                <label>
                    Full Name *
                </label>

                <input
                    type="text"
                    name="full_name"
                    value="{{ old('full_name', $portfolio->full_name) }}"
                    placeholder="Juan Dela Cruz"
                    required
                >

            </div>


            <!-- EMAIL -->

            <div class="form-group">

                <label>
                    Email *
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email', $portfolio->email) }}"
                    placeholder="juan@example.com"
                    required
                >

            </div>


            <!-- CONTACT -->

            <div class="form-group">

                <label>
                    Contact Number
                </label>

                <input
                    type="text"
                    name="contact_number"
                    value="{{ old('contact_number', $portfolio->contact_number) }}"
                    placeholder="+63 912 345 6789"
                >

            </div>


            <!-- ADDRESS -->

            <div class="form-group full">

                <label>
                    Address
                </label>

                <input
                    type="text"
                    name="address"
                    value="{{ old('address', $portfolio->address) }}"
                    placeholder="Cebu City, Philippines"
                >

            </div>


            <!-- PROFILE PICTURE -->

            <div class="form-group full">

                <label>
                    Profile Picture
                </label>

                @if($portfolio->profile_picture)

                    <div style="margin-bottom: 15px;">

                        <img
                            src="{{ asset('storage/' . $portfolio->profile_picture) }}"
                            alt="{{ $portfolio->full_name }}"
                            style="
                                width: 120px;
                                height: 120px;
                                object-fit: cover;
                                border-radius: 50%;
                            "
                        >

                    </div>

                @endif


                <input
                    type="file"
                    name="profile_picture"
                    accept=".jpg,.jpeg,.png,.webp"
                >

                <small>
                    Leave empty if you want to keep the current picture.
                </small>

            </div>


            <!-- ABOUT ME -->

            <div class="form-group full">

                <label>
                    About Me
                </label>

                <textarea
                    name="about_me"
                    rows="6"
                    placeholder="Tell visitors about yourself..."
                >{{ old('about_me', $portfolio->about_me) }}</textarea>

            </div>

        </div>

    </div>


    <!-- EDUCATION -->

    <div class="form-section">

        <div class="form-section-title">

            <span>02</span>

            <div>

                <h2>
                    Educational Background
                </h2>

                <p>
                    Update your educational history.
                </p>

            </div>

        </div>


        <div class="form-group">

            <textarea
                name="education"
                rows="6"
                placeholder="Bachelor of Science in Information Technology&#10;University Name&#10;2022 - 2026"
            >{{ old('education', $portfolio->education) }}</textarea>

        </div>

    </div>


    <!-- SKILLS -->

    <div class="form-section">

        <div class="form-section-title">

            <span>03</span>

            <div>

                <h2>
                    Skills
                </h2>

                <p>
                    Update your skills.
                </p>

            </div>

        </div>


        <div class="form-group">

            <textarea
                name="skills"
                rows="5"
                placeholder="Laravel, PHP, HTML, CSS, JavaScript..."
            >{{ old('skills', $portfolio->skills) }}</textarea>

        </div>

    </div>


    <!-- PROJECTS -->

    <div class="form-section">

        <div class="form-section-title">

            <span>04</span>

            <div>

                <h2>
                    Projects
                </h2>

                <p>
                    Update your projects.
                </p>

            </div>

        </div>


        <div class="form-group">

            <textarea
                name="projects"
                rows="7"
                placeholder="Project Name&#10;Description&#10;Technologies Used"
            >{{ old('projects', $portfolio->projects) }}</textarea>

        </div>

    </div>


    <!-- WORK EXPERIENCE -->

    <div class="form-section">

        <div class="form-section-title">

            <span>05</span>

            <div>

                <h2>
                    Work Experience
                </h2>

                <p>
                    Update your work or internship experience.
                </p>

            </div>

        </div>


        <div class="form-group">

            <textarea
                name="work_experience"
                rows="7"
                placeholder="Company Name&#10;Position&#10;Description&#10;2025 - Present"
            >{{ old('work_experience', $portfolio->work_experience) }}</textarea>

        </div>

    </div>


    <!-- SOCIAL LINKS -->

    <div class="form-section">

        <div class="form-section-title">

            <span>06</span>

            <div>

                <h2>
                    Social Links
                </h2>

                <p>
                    Update your online profiles.
                </p>

            </div>

        </div>


        <div class="form-grid">


            <!-- WEBSITE -->

            <div class="form-group">

                <label>
                    Website
                </label>

                <input
                    type="url"
                    name="website"
                    value="{{ old('website', $portfolio->website) }}"
                    placeholder="https://example.com"
                >

            </div>


            <!-- GITHUB -->

            <div class="form-group">

                <label>
                    GitHub
                </label>

                <input
                    type="url"
                    name="github"
                    value="{{ old('github', $portfolio->github) }}"
                    placeholder="https://github.com/username"
                >

            </div>


            <!-- FACEBOOK -->

            <div class="form-group">

                <label>
                    Facebook
                </label>

                <input
                    type="url"
                    name="facebook"
                    value="{{ old('facebook', $portfolio->facebook) }}"
                    placeholder="https://facebook.com/username"
                >

            </div>


            <!-- INSTAGRAM -->

            <div class="form-group">

                <label>
                    Instagram
                </label>

                <input
                    type="url"
                    name="instagram"
                    value="{{ old('instagram', $portfolio->instagram) }}"
                    placeholder="https://instagram.com/username"
                >

            </div>


            <!-- LINKEDIN -->

            <div class="form-group full">

                <label>
                    LinkedIn
                </label>

                <input
                    type="url"
                    name="linkedin"
                    value="{{ old('linkedin', $portfolio->linkedin) }}"
                    placeholder="https://linkedin.com/in/username"
                >

            </div>

        </div>

    </div>


    <!-- TEMPLATE -->

    <div class="form-section">

        <div class="form-section-title">

            <span>07</span>

            <div>

                <h2>
                    Portfolio Template
                </h2>

                <p>
                    Choose which portfolio design to use.
                </p>

            </div>

        </div>


        <div class="form-group">

            <label>
                Selected Template
            </label>

            <select
                name="template"
                required
            >

                <option
                    value="simple"
                    {{ old('template', $portfolio->template) === 'simple' ? 'selected' : '' }}
                >
                    Simple
                </option>

                <option
                    value="modern"
                    {{ old('template', $portfolio->template) === 'modern' ? 'selected' : '' }}
                >
                    Modern
                </option>

                <option
                    value="creative"
                    {{ old('template', $portfolio->template) === 'creative' ? 'selected' : '' }}
                >
                    Creative
                </option>

            </select>

        </div>

    </div>


    <!-- FORM BUTTONS -->

    <div class="form-actions">

        <a
            href="{{ route('portfolios.show', $portfolio) }}"
            class="btn btn-light"
        >
            Cancel
        </a>


        <button
            type="submit"
            class="btn btn-primary"
        >
            Update Portfolio →
        </button>

    </div>


</form>
```

</div>

@endsection
