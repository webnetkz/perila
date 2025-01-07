    <div class="messangers">
      <a href="<?=$wp;?>" target="_blank">
        <img src="./assets/imgs/icons/whatsapp.png" alt="whatsapp">
      </a>
      <a href="<?=$telegram;?>" target="_blank">
        <img src="./assets/imgs/icons/telegram.png" alt="telegram" class="telegram-icon">
      </a>
    </div>

    <div id="feedback">
    <div class="login-box">
        <h2>Оставить заявку</h2>
        <form method="POST" onsubmit="isSendForm(event)">
            <div class="user-box">
            <input type="text" name="name" id="nameId" required>
            <label for="nameId">Имя</label>
            </div>
            <div class="user-box">
            <input type="tel" name="phone" id="phoneId" required>
            <label for="phoneId">Номер телефона</label>
            </div>
            <button class="hover-button" type="submit">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Отправить
            </button>
        </form>
    </div>
</div>

<script>
    function isSendForm(event)
    {
        event.preventDefault();

        let messageBlock = document.createElement('div');
            messageBlock.classList.add('mini-message');
            messageBlock.innerHTML = 'Заявка принята, наш менеджер скоро свяжится с вами.';
                
        document.body.appendChild(messageBlock);

        messageBlock.addEventListener('click', () => {
            messageBlock.remove();
        });

        setTimeout(() => {
            messageBlock.remove();
        }, 7000);
        // END MINI-MESSAGE

        let name = document.querySelector("input[name='name']").value;
        let phone = document.querySelector("input[name='phone']").value;
        document.querySelector("input[name='name']").value = '';
        document.querySelector("input[name='phone']").value = '';

        let xhr = new XMLHttpRequest();

        xhr.open("POST", "./app/send_message_telegram.php", true);

        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        xhr.onload = function()
        {
            if (xhr.status === 200)
            {
                
            }
            else
            {
                console.error("Ошибка " + xhr.status + ": " + xhr.statusText);
            }
        };

        xhr.onerror = function()
        {
            console.error("Ошибка сети");
        };

        xhr.send("name=" + encodeURIComponent(name) + "&phone=" + encodeURIComponent(phone));
    }
</script>
    
    <footer>
      <div class="contacts">
        <a href="tel:<?=$phoneLink;?>" class="promo-phone"><b><p>Связаться с нами</p> <?=$phone;?></b></a>
      </div>
      <div>
        <a href="https://webnet.kz">WebNet</a>
      </div>
      <div class="copyright">
        <a href="<?=$site;?>"><?=$site;?> <sup>©</sub></a> <?=date('Y');?>
      </div>
    </footer>
  

  <script type="module" src="./assets/js/cursor.js"></script>

  <script src="./assets/js/main.js"></script>
  <script>
			if ('serviceWorker' in navigator) {
				// window.addEventListener('load', function() {
				// 	navigator.serviceWorker.register('./sw.js')
				// 	.then(function(registration) {
				// 	})
				// 	.catch(function(error) {
				// 	});
				// });
			}
		</script>
	</body>
</html>