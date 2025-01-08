<div class="col-lg-8">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
            <!-- Name Field -->
            <div class="col-md-6">
                <input type="text" wire:model="name" class="form-control" placeholder="Your Name" required>
            </div>

            <!-- Email Field -->
            <div class="col-md-6">
                <input type="email" wire:model="email" class="form-control" placeholder="Your Email" required>
            </div>

            <!-- Subject Field -->
            <div class="col-md-12">
                <input type="text" wire:model="subject" class="form-control" placeholder="Subject" required>
            </div>

            <!-- Message Field -->
            <div class="col-md-12">
                <textarea wire:model="message" class="form-control" rows="6" placeholder="Message" required></textarea>
            </div>

            <!-- Submit Button -->
            <div class="col-md-12 text-center">
                <button type="submit">Send Message</button>
            </div>
        </div>
    </form>
</div>
