    <div class="messangers">
      <a href="<?=$wp;?>" target="_blank">
        <img src="./assets/imgs/icons/whatsapp.png" alt="whatsapp">
      </a>
      <a href="<?=$telegram;?>" target="_blank">
        <img src="./assets/imgs/icons/telegram.png" alt="telegram" class="telegram-icon">
      </a>
    </div>
    
    <footer>
      <div class="contacts">
        <a href="tel:<?=$phoneLink;?>" class="promo-phone"><?=$phone;?></a>
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