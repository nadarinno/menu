<article class="meal-card {{ $meal['available'] ? '' : 'unavailable' }}">
    <div class="meal-icon">
        {{ $meal['icon'] }}
    </div>

    <div class="meal-information">
        <div class="meal-header">
            <h3>
                {{ $meal['name'] }}
            </h3>

            <span class="meal-price">
                {{ number_format($meal['price'], 2) }} ₪
            </span>
        </div>

        <p class="meal-description">
            {{ $meal['description'] }}
        </p>

        @if (!empty($meal['tags']))
            <div class="tags">
                @foreach ($meal['tags'] as $tag)
                    <span
                        @class([
                            'tag',
                            'spicy-tag' => $tag === 'Spicy',
                            'vegetarian-tag' => $tag === 'Vegetarian',
                            'popular-tag' => $tag === 'Most Popular',
                            'new-tag' => $tag === 'New',
                        ])
                    >
                        @if ($tag === 'Spicy')
                            🌶️
                        @elseif ($tag === 'Vegetarian')
                            🌱
                        @elseif ($tag === 'Most Popular')
                            ⭐
                        @elseif ($tag === 'New')
                            ✨
                        @endif

                        {{ $tag }}
                    </span>
                @endforeach
            </div>
        @endif

        @unless ($meal['available'])
            <p class="availability-message">
                Currently unavailable
            </p>
        @endunless
    </div>
</article>