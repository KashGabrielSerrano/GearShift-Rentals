<footer class="bg-black py-4 border-top border-secondary border-opacity-25 text-center text-white-50 small">
        <div class="container d-md-flex justify-content-between align-items-center">
            <p class="mb-2 mb-md-0">© <?php echo date("Y"); ?> GearShift Rentals Inc. Developed by Kash Gabriel Serrano.</p>
            <div>
                <a href="#home" class="text-white-50 text-decoration-none">Back to Top <i class="bi bi-arrow-up-short"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('#navbarNav .nav-link, a[href^="#"]');

        if (sections.length > 0 && navLinks.length > 0) {
            const observerOptions = {
                root: null,
                rootMargin: '-20% 0px -60% 0px',
                threshold: 0
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const currentId = entry.target.getAttribute('id');
                        
                        document.querySelectorAll('#navbarNav .nav-link').forEach(link => {
                            link.classList.remove('active');
                            if (link.getAttribute('href') === `#${currentId}`) {
                                link.classList.add('active');
                            }
                        });
                    }
                });
            }, observerOptions);

            sections.forEach(section => observer.observe(section));
        }

        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    e.preventDefault();
                    
                    const navOffset = 90; 
                    const elementPosition = targetElement.getBoundingClientRect().top;
                    const offsetPosition = elementPosition + window.pageYOffset - navOffset;

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });

                    const navbarCollapse = document.getElementById('navbarNav');
                    if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
                        if (bsCollapse) bsCollapse.hide();
                    }
                }
            });
        });
    });
    </script>

    <script>
        function selectVehicle(vehicleName) {
            const selectEl = document.getElementById('vehicleChoice');
            if (selectEl) {
                for (let i = 0; i < selectEl.options.length; i++) {
                    if (selectEl.options[i].value.includes(vehicleName)) {
                        selectEl.selectedIndex = i;
                        break;
                    }
                }
            }
            document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
        }

        function setDefaultDates() {
            const today = new Date().toISOString().split('T')[0];
            const future = new Date(Date.now() + 3 * 24 * 60 * 60 * 1000).toISOString().split('T')[0];
            const pickup = document.getElementById('pickupDate');
            const dropoff = document.getElementById('returnDate');
            if (pickup) pickup.value = today;
            if (dropoff) dropoff.value = future;
        }

        window.addEventListener('DOMContentLoaded', setDefaultDates);
    </script>
</body>
</html>