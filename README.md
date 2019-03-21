models:
- Tree - generate tree;
- Giphy - form with validation recaptcha for get random images(gif) in Giphy.

controllers:
	SiteController:
		- actionIndex - genereate tree;
		- actionRecaptcha - get random gif/
views: 
- index;
- re-captcha;
- image;

modules:
- loveorigami/yii2-modal-ajax;
- himiklab/yii2-recaptcha-widget
- yiisoft/yii2-httpclient.
