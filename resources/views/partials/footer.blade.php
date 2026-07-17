<footer class="footer">
    <div class="container footer-content">
        <div>
            <h3>
                {{ $restaurant['name'] }}
            </h3>

            <p>
                {{ $restaurant['tagline'] }}
            </p>
        </div>

        <div class="footer-contact">
            <span>
                📞 {{ $restaurant['phone'] }}
            </span>

            <span>
                📍 {{ $restaurant['address'] }}
            </span>
        </div>
    </div>

    <div class="copyright">
        All rights reserved © {{ date('Y') }}
        {{ $restaurant['name'] }}
    </div>
</footer>