<div id="fh5co-consult">
    <div class="video fh5co-video" style="background-image: url({{asset('assets/images/cover_bg_1.jpg')}});">
        <div class="overlay"></div>
    </div>
    <div class="choose animate-box">
        <h2>Contact</h2>
        <form action="{{ route("contact") }}" method="POST">
            @csrf
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="firstname" id="fname" class="form-control" placeholder="Your firstname">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-6">
                    <input type="text" name="lastname" id="lname" class="form-control" placeholder="Your lastname">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" name="email" id="email" class="form-control" placeholder="Your email address">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject of this message">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary">
            </div>

        </form>	
    </div>
</div>