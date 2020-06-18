{{--
  -   Reveal JS Slide Creator
  -   Copyright (C) 2020  ebalo <webdev.ebalo@gmail.com>
  -
  -   This program is free software: you can redistribute it and/or modify
  -   it under the terms of the GNU General Public License as published by
  -   the Free Software Foundation, either version 3 of the License, or
  -   (at your option) any later version.
  -
  -   This program is distributed in the hope that it will be useful,
  -   but WITHOUT ANY WARRANTY; without even the implied warranty of
  -   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  -   GNU General Public License for more details.
  -
  -  You should have received a copy of the GNU General Public License
  -  along with this program.  If not, see <https://www.gnu.org/licenses/>.
--}}

@extends('layouts.app')

@section('content')
    <nav-bar :urls="{{ generateDashboardLinks() }}"></nav-bar>
    <main>
        <section>
            <h2>Saved presentations</h2>
            <presentation preview="https://via.placeholder.com/1000x500?text=Presentation+first+page"
                  title="Presentation title" creation-date="01-01-1900" last-update="16-06-2020"
                  :slide-number="12" id="test-id" :is-public="true"></presentation>
            <presentation preview="https://via.placeholder.com/1000x500?text=Presentation+first+page"
                  title="Presentation title" creation-date="01-01-1900" last-update="16-06-2020"
                  :slide-number="12" id="test-id" :is-public="true"></presentation>
            <presentation preview="https://via.placeholder.com/1000x500?text=Presentation+first+page"
                  title="Presentation title" creation-date="01-01-1900" last-update="16-06-2020"
                  :slide-number="12" id="test-id" :is-public="true"></presentation>
            <presentation preview="https://via.placeholder.com/1000x500?text=Presentation+first+page"
                  title="Presentation title" creation-date="01-01-1900" last-update="16-06-2020"
                  :slide-number="12" id="test-id" :is-public="true"></presentation>
        </section>
    </main>
@endsection
