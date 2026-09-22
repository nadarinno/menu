@extends('layouts.app')

@section('title', $restaurant['name'] . ' | Menu')

@section('content')

    <section class="hero">
        <div class="container hero-content">
            <span class="hero-badge">
                Restaurant Menu
            </span>

            <h1>
                {{ $restaurant['name'] }}
            </h1>

            <p>
                {{ $restaurant['tagline'] }}
            </p>

            <div class="restaurant-details">
                <span>
                    📍 {{ $restaurant['address'] }}
                </span>

                <span>
                    📞 {{ $restaurant['phone'] }}
                </span>

                <span>
                    🕒 {{ $restaurant['opening_hours'] }}
                </span>
            </div>
        </div>
    </section>

    <section class="menu-section">
        <div class="container">

            @forelse ($categories as $category)
                <section class="category-section">
                    <div class="category-header">
                        <h2>
                            {{ $category['name'] }}
                        </h2>

                        <p>
                            {{ $category['description'] }}
                        </p>
                    </div>

                    <div class="meals-grid">
                        @forelse ($category['meals'] as $meal)
                            @include('partials.menu-card', [
                                'meal' => $meal
                            ])
                        @empty
                            <p class="empty-message">
                                There are currently no meals in this category.
                            </p>
                        @endforelse
                    </div>
                </section>
            @empty
                <div class="empty-message">
                    There are currently no menu categories.
                </div>
            @endforelse

        </div>
    </section>

@endsection