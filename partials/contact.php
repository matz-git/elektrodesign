<span class="anchor" id="kontakt"></span>

<div class="content contact-info">
	<h2 class="content-head is-center"><?php if(get_field('third-headline')) the_field('third-headline'); ?></h2> 

    <div class="contact-info-wrapper">
        <div class="pure-g">
            <div class="pure-u-1 pure-u-lg-1-2 contact-info-left contact-info-box">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/email.svg" class="info-icon" alt="">
                <h3>Adresse</h3> 
                <p><?php the_field('name') ?></p>
                <p><?php the_field('straße') ?></p>
                <p><?php the_field('ort') ?></p>
            </div>
            
            <div class="pure-u-1 pure-u-lg-1-2 contact-info-right contact-info-box">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/speech-bubbles.svg" class="info-icon" alt="">
                <h3>Kontakt</h3>
                <div class="pure-g">
                    <div class="pure-u-1-4 table-left" style="text-align: right">
                        <p>Tel.:</p>
                        <p>Fax:</p>
                        <p>E-Mail:</p>
                    </div>
                    <div class="pure-u-3-4 table-right" style="text-align: left;">
                        <p><a href="tel:<?php the_field('telefon') ?>"><?php the_field('telefon') ?></a></p>
                        <p><?php the_field('fax') ?></p>
                        <p>
                            <span id="obf">
                                <script>document.getElementById("obf").innerHTML="<n uers=\"znvygb:<?php echo str_rot13(get_field('email')); ?>\"><?php echo str_rot13(get_field('email')); ?></n>".replace(/[a-zA-Z]/g,function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);});</script>
                                <noscript>
                                    <span style="unicode-bidi:bidi-override;direction:rtl;"><?php echo strrev(get_field('email')); ?></span>
                                </noscript>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="pure-g contact">
    <div class="pure-u-1 pure-u-md-1 pure-u-lg-1-2 contact-left">
        <div id="map" style="width: 100%; height: 100%;"></div>
    </div>

    <div class="pure-u-1 pure-u-md-1 pure-u-lg-1-2 contact-right">
        <h2 class="content-head"><?php if(get_field('fourth-headline')) the_field('fourth-headline'); ?></h2>

        <form id="contactForm" method="post" action="http://localhost:8888/privat/rw_elektrodesign_final/wp-content/themes/sdsds/submit-contact.php">
            <div class="pure-g contact-form">
                <div class="css pure-u-1 pure-u-md-1-2">
                    <label for="s_na" class="">Name&#42;</label>
                    <input id="s_na" type="text" name="s_na" required minlength="3" maxlength="40">
                </div>
                <div class="css pure-u-1 pure-u-md-1-2">
                    <label for="s_em">E-Mail&#42;</label>
                    <input id="s_em" type="email" name="s_em" required minlength="3" maxlength="40">
                </div>
                <div class="css pure-u-1-1">
                    <label for="s_su">Betreff&#42;</label>
                    <input id="s_su" type="text" name="s_su" required minlength="3" maxlength="40">
                </div>
                <div class="css pure-u-1-1">
                    <label for="s_me" id="b">Ihre Nachricht&#42;</label>
                    <textarea id="s_me" rows="1" name="s_me" required minlength="3" maxlength="2000"></textarea>
                </div>
                <div class="css pure-u-1-1">
                    <input type="checkbox" name="s_cb" id="s_cb" onclick="check_cb()">
                    <span id="checkbox_info">
                        Sie erklären sich damit einverstanden, dass Ihre Daten zur Bearbeitung Ihres Anliegens verwendet werden. Weitere Informationen und Widerrufshinweise finden sie in der <a href="<?php echo get_page_link(179); ?>">Datenschutzerklärung</a>.
                    </span>
                </div>

                <div class="g-recaptcha" data-sitekey="6LeLZBAUAAAAAAqF3T17gBUfqlV-H4HT5UkszAia"></div>

                <input class="submit" type="submit" value="Abschicken">
            </div>
        </form>
    </div>
</div>

<?php get_template_part('partials/modal'); ?>

<script>

    function check_cb() {
        var checkBox = document.getElementById("s_cb");

        if (checkBox.checked == true){
            checkBox.classList.remove("cb_error");
        } else {
            checkBox.classList.add("cb_error");
        }
    }

    $("textarea").keypress(function () {
        if (this.checkValidity() == false) {
            $(this).siblings().removeClass('green');
        } else {
            $(this).siblings().addClass('green');
        }
    });

    $("input").keypress(function () {
        var inpObj = document.getElementById("s_na");
        if (this.checkValidity() == false) {
            //console.log($(this).siblings())
            $(this).siblings().removeClass('green');
        } else {
            $(this).siblings().addClass('green');
        }
    });

    $("form").submit(function (event) {
        event.preventDefault();

        var response = grecaptcha.getResponse();
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        var checkBox = document.getElementById("s_cb");

        if(checkBox.checked == false) {
            checkBox.classList.add("cb_error");
        } else {
            
            if(response.length == 0) {
                // reCaptcha not verified
            } else {
                if (( ($('#s_na').val() == '') && ($('#s_na')[0].checkValidity()) ) ||
                    ( ($('#s_em').val() == '') && ($('#s_em')[0].checkValidity()) && (!re.test($('#s_em').val()))) ||
                    ( ($('#s_su').val() == '') && ($('#s_su')[0].checkValidity()) ) ||
                    ( ($('#s_me').val() == '') && ($('#s_me')[0].checkValidity()) ) //||
                    //( (response.length == 0) )
                ) {
                    event.preventDefault();
                    //console.log("fehlgeschlagen");
                } else {
                    event.preventDefault();
                    
                    var form = $("form");
                    var method = form.attr("method"),
                        data = form.serialize();
                    $.ajax({
                        url: '<?php echo get_bloginfo('template_directory') . '/submit-contact.php'; ?>',
                        type: method,
                        data: data
                    }).done(function (data) {
                        checkBox.classList.remove("cb_error");
                        $('#contactForm')[0].reset();
                        $("#modal-1").prop("checked", true);
                        $('.css').removeClass('active');
                        $('.css').find('label').removeClass('green');
                        console.log("Erfolgreich:" + data);
                    }).fail(function () {
                        //console.log("Fehler!" + data);
                    }).always(function () {
                        //console.log("Beendet!" + data);
                    });
                }
            }
        }
    });

</script>