<div class="news-letter">
    <h1>NewsLetter</h1>
    <span>Dapatkan promo menarik dari toko kami segera!</span>
    <div class="tabs-mail">
        <img src="{{url(dirTemaToko().'jarvisgames/assets/img/mail.png')}}" class="mail">
        <form action="{{@$mailing->action}}" method="post" class="subscribe">
            <div class="form">
                <input type="text" name="email" class="email" {{ @$mailing->action==''?'disabled="disabled"':'' }} placeholder="Enter your email" name="EMAIL" class="input-medium required email" id="newsletter mce-EMAIL">
            </div>
            <div class="btn">
                <button type="submit" class="btn-submit" {{ @$mailing->action==''?'disabled="disabled"':'' }}>Subscribe</button>
            </div>
        </form>
    </div>
</div>