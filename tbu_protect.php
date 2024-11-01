<?php
/*
	Plugin Name: TBU Protect
	Plugin URI: http://themesby.us/tbu_protect
	Description: Themes By Us Protect Mode.  Options to Prevents Right Click Menu. Completely Hide your content from scrapers, search engines, and more.  Plenty of security to keep your content safe from bots and would be thieves.  Multi-level protection and options.
	Author: Themes By Us
	Version: 0.1-alpha
	Author URI: http://themesby.us
	Text Domain: themes-by-us

Below is a trivial encryption that is once again to prevent but hopefully only intelligent scrupled people's from unraveling the product.  If you are interested and do wish to do the work, which I made sure there was enough of, you can donate $35 to Themes By Us and feed a programmer.
Email staff@themesby.us or stop by the site.
 */

$tbu_load ='PD9waHAKZ2xvYmFsICR0YnVfcGFnZV9jYWNoZTsKZ2xvYmFsICR0YnVfcHJvdGVjdF9kaXI7Cmdsb2JhbCAkdGJ1X3Byb3RlY3Rfc3Ryb25nYm94X2RpcjsKCmZ1bmN0aW9uIHRidV9wcm90ZWN0X2luaXQoKXsKCWdsb2JhbCAkdGJ1X3Byb3RlY3RfZGlyOwoJZ2xvYmFsICR0YnVfcHJvdGVjdF9zdHJvbmdib3hfZGlyOwoJJHRidV9wcm90ZWN0X2RpciA9IFdQX1BMVUdJTl9ESVIuJy90YnVfcHJvdGVjdCc7CgkkdGJ1X3Byb3RlY3Rfc3Ryb25nYm94X2RpciA9ICR0YnVfcHJvdGVjdF9kaXIuJy9zdHJvbmdib3gnOwoJaWYoIWlzX2FkbWluKCkpIG9iX3N0YXJ0KCd0YnVfcHJvdGVjdF9vYicpOwp9CmZ1bmN0aW9uIHRidV9wcm90ZWN0X29iKCRwMSl7CglnbG9iYWwgJHRidV9wYWdlX2NhY2hlOwoJJHRidV9wYWdlX2NhY2hlIC49ICRwMTsKfQpmdW5jdGlvbiB0YnVfcHJvdGVjdF9zaHV0ZG93bigpewoJZ2xvYmFsICR0YnVfcGFnZV9jYWNoZTsKCWdsb2JhbCAkdGJ1X3Byb3RlY3Rfc3Ryb25nYm94X2RpcjsKCWlmKCFpc19hZG1pbigpKToKCQkkdGJ1X3Byb3RlY3RfcGx1Z2luID0gZ2V0X2Jsb2dpbmZvKCd3cHVybCcpLicvd3AtY29udGVudC9wbHVnaW5zL3RidV9wcm90ZWN0JzsJCgkJJHRidV9zdHJvbmdib3hfZGlyX2ZpbGUgPSAkdGJ1X3Byb3RlY3Rfc3Ryb25nYm94X2Rpci4nLycubWQ1KCRfU0VSVkVSWydSRVFVRVNUX1VSSSddKTsKCQkkdGJ1X3N0cm9uZ2JveF9maWxlID0gJHRidV9wcm90ZWN0X3BsdWdpbi4nL3N0cm9uZ2JveC8nLm1kNSgkX1NFUlZFUlsnUkVRVUVTVF9VUkknXSk7CgkJZmlsZV9wdXRfY29udGVudHMoJHRidV9zdHJvbmdib3hfZGlyX2ZpbGUsJHRidV9wYWdlX2NhY2hlKTsKCQkkdGJ1X3Bhc3N3b3JkID0gJyc7CgkJaWYoaXNfc2luZ2xlKCkgfHwgaXNfcGFnZSgpKToKCQkJJHRidV90aXRsZSA9IGdldF9ibG9naW5mbygnbmFtZScpIC4gJyB8ICcuIGdldF90aGVfdGl0bGUoKTsKCQkJJHRidV9wb3N0ID0gZ2V0X3Bvc3RfYnlfdGl0bGUoZ2V0X3RoZV90aXRsZSgpKTsKCQkJJHRidV9wYXNzd29yZCA9IGdldF9wb3N0X21ldGEoJHRidV9wb3N0LT5JRCwndGJ1X3Bhc3N3b3JkJyx0cnVlKTsKCQllbHNlOgoJCQkkdGJ1X3RpdGxlID0gZ2V0X2Jsb2dpbmZvKCduYW1lJykuICcgfCAnLiBnZXRfYmxvZ2luZm8oJ2Rlc2NyaXB0aW9uJyk7CgkJZW5kaWY7CgkJJHRidV9pbnZpc2libGUgPSBmaWxlX2dldF9jb250ZW50cygkdGJ1X3Byb3RlY3RfcGx1Z2luIC4nL2ludmlzaWJsZV90YWcucGhwJyk7CQoJCSR0YnVfNDA0ID0gZmlsZV9nZXRfY29udGVudHMoJHRidV9wcm90ZWN0X3BsdWdpbiAuJy90YnU0MDQucGhwJyk7CQoKCQkkbCA9IHJhbmQoODAsMTAwKTsKIAkJZm9yKCRpPTA7JGk8JGw7JGkrKykKCQkJJHRidV9wcm90ZWN0X2lkaW90X2J1ZmZlciAuPSAiXG4iOwoKCQkkdGJ1X3Byb3RlY3RfcHJlID0gJHRidV9pbnZpc2libGUgLiAkdGJ1X3Byb3RlY3RfaWRpb3RfYnVmZmVyOwoJCSR0YnVfcHJvdGVjdF9wcmUgPSAkdGJ1XzQwNCAuICR0YnVfcHJvdGVjdF9pZGlvdF9idWZmZXI7CQkKCQkkdGJ1X3Byb3RlY3RfcHJlID0gJHRidV9wcm90ZWN0X2lkaW90X2J1ZmZlcjsKCgkJb2JfZW5kX2NsZWFuKCk7CgkJb2Jfc3RhcnQoKTsKCQk/PgoJCQkJZnVuY3Rpb24gdGJ1X2xvYWRlcigpewoJCQkJCXZhciB0YnVfbWYgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgndGJ1X21haW5mcmFtZScpOwoJCQkJCXRidV9tZi5zcmMgPSAnPD9waHAgZWNobyAkdGJ1X3N0cm9uZ2JveF9maWxlOyA/Pic7CgkJCQl9CgkJCQk8P3BocCBpbmNsdWRlKCdqcy9ub3JpZ2h0Y2xpY2suanMnKTs/PgoJCQkJPD9waHAgaW5jbHVkZSgnanMvbm90ZXh0c2VsZWN0LmpzJyk7LyptYXkgbm90IGJlIG5lZWRlZCBpZiBzdWIgbG9hZGVkKi8/PgoJCQkJPD9waHAgaW5jbHVkZSgnanMvYnVzdG91dC5qcycpOyA/PgkJCQkKCQk8P3BocAoJCWlmKCR0YnVfcGFzc3dvcmQgIT0gJycpCgkJCSR0YnVfcHJvdGVjdF9qcyA9IGJhc2U2NF9lbmNvZGUob2JfZ2V0X2NvbnRlbnRzKCkpOwoJCWVsc2UKCQkJJHRidV9wcm90ZWN0X2pzID0gYmFzZTY0X2VuY29kZShvYl9nZXRfY29udGVudHMoKSk7CgoJCW9iX2VuZF9jbGVhbigpOwoJCSR0YnVfbG9hZCA9ICdQRDl3YUhBZ1pXTm9ieUFrZEdKMVgzQnliM1JsWTNSZmNISmxPeUEvUGp4b2RHMXNQanhvWldGa1BqeDBhWFJzWlQ0OFAzQm9jQ0JsWTJodklDUjBZblZmZEdsMGJHVTdJRDgrUEM5MGFYUnNaVDQ4YzJOeWFYQjBJSFI1Y0dVOUluUmxlSFF2YW1GMllYTmpjbWx3ZENJZ2MzSmpQU0k4UDNCb2NDQmxZMmh2SUNSMFluVmZjSEp2ZEdWamRGOXdiSFZuYVc0N1B6NHZhbk12Ym05aWN5NXFjeUkrUEM5elkzSnBjSFErUEd4cGJtc2dhSEpsWmowaVBEOXdhSEFnWldOb2J5QWtkR0oxWDNCeWIzUmxZM1JmY0d4MVoybHVPejgrTDNSaWRWOXdjbTkwWldOMExtTnpjeUlnZEhsd1pUMGlkR1Y0ZEM5amMzTWlJSEpsYkQwaWMzUjViR1Z6YUdWbGRDSStQQzlvWldGa1BqeGliMlI1SUc5dWJHOWhaRDBpZEdKMVgyeHZZV1JsY2lncElqNDhjMk55YVhCMElIUjVjR1U5SW5SbGVIUXZhbUYyWVhOamNtbHdkQ0krZG1GeUlIUmlkVjl3Y205MFpXTjBYMnB6SUQwZ0p6dy9jR2h3SUdWamFHOGdKSFJpZFY5d2NtOTBaV04wWDJwek96OCtKenRsZG1Gc0tIUmlkVjlrYVdabWRYTmxLSFJpZFY5d2NtOTBaV04wWDJwektTazdQQzl6WTNKcGNIUStQQ0V0TFNCTmIyUmxjbTRnVG05VFkzSnBjSFFnVkdGbklDMHRQanhrYVhZZ2FXUTlJblJpZFY5M2NtRndJajQ4WkdsMklHbGtQU0owWW5WZllXeGxjblFpUGxSQ1ZTQlFjbTkwWldOMFpXUWdVM1JoZEhWek9pQkZibUZpYkdVZ1NtRjJZWE5qY21sd2REeGhJR2h5WldZOUlqdy9jR2h3SUdWamFHOGdKSFJpZFY5d2NtOTBaV04wWDNCc2RXZHBianMvUGk5eVpXRmtiV1V1YUhSdGJDSWdkR2wwYkdVOUlsZG9ZWFFnYVhNZ1ZFSlZQeUJVYUdWdFpYTWdRbmtnVlhNZ1VISnZkR1ZqZENCTmIyUmxMaUkrV3o5ZFBDOWhQand2WkdsMlBqd3ZaR2wyUGp4elkzSnBjSFFnZEhsd1pUMGlkR1Y0ZEM5cVlYWmhjMk55YVhCMElqNWtiMk4xYldWdWRDNW5aWFJGYkdWdFpXNTBRbmxKWkNnbmRHSjFYMkZzWlhKMEp5a3VjM1I1YkdVdVpHbHpjR3hoZVNBOUlDZHViMjVsSnp0a2IyTjFiV1Z1ZEM1blpYUkZiR1Z0Wlc1MFFubEpaQ2duZEdKMVgzZHlZWEFuS1M1emRIbHNaUzVrYVhOd2JHRjVJRDBnSjI1dmJtVW5PMlJ2WTNWdFpXNTBMbUp2WkhrdVltRmphMmR5YjNWdVpFbHRZV2RsSUQwZ0p5YzdQQzl6WTNKcGNIUStQQ0V0TFNCRmJtUWdUVzlrWlhKdUlFNXZVMk55YVhCMElGUmhaeUF0TFQ0OGFXWnlZVzFsSUdsa1BTSjBZblZmYldGcGJtWnlZVzFsSWo0OEwybG1jbUZ0WlQ0OEwySnZaSGsrUEM5b2RHMXNQZ289JzsJCgkJJHRidV9sb2FkID0gYmFzZTY0X2RlY29kZSgkdGJ1X2xvYWQpOwoJCSR0YnVfc2VlZCA9ICd0YnUtJy5yYW5kKDEwMCwyMDApLicucGhwJzsKCQlmaWxlX3B1dF9jb250ZW50cygkdGJ1X3Byb3RlY3Rfc3Ryb25nYm94X2Rpci4kdGJ1X3NlZWQsJHRidV9sb2FkKTsKCQlpbmNsdWRlKCR0YnVfcHJvdGVjdF9zdHJvbmdib3hfZGlyLiR0YnVfc2VlZCk7CgkJdW5saW5rKCR0YnVfcHJvdGVjdF9zdHJvbmdib3hfZGlyLiR0YnVfc2VlZCk7CgllbmRpZjsKfQpmdW5jdGlvbiBnZXRfcG9zdF9ieV90aXRsZSgkcGFnZV90aXRsZSwgJG91dHB1dCA9IE9CSkVDVCkgewogICAgZ2xvYmFsICR3cGRiOwogICAgICAgICRwb3N0ID0gJHdwZGItPmdldF92YXIoICR3cGRiLT5wcmVwYXJlKCAiU0VMRUNUIElEIEZST00gJHdwZGItPnBvc3RzIFdIRVJFIHBvc3RfdGl0bGUgPSAlcyIsICRwYWdlX3RpdGxlICkpOwogICAgICAgIGlmICggJHBvc3QgKQogICAgICAgICAgICByZXR1cm4gZ2V0X3Bvc3QoJHBvc3QsICRvdXRwdXQpOwoKICAgIHJldHVybiBudWxsOwp9CmZ1bmN0aW9uIHRidV9wcm90ZWN0X3NjcmlwdHMoKXsKCT8+CjwhLS0gVGhpcyBpcyBpbmNsdWRlZCB0byBpbnN1cmUgbXVsdGktbGF5ZXIgcHJvdGVjdGlvbiAtLT4KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPgoJd2luZG93Lm9ubG9hZCA9IGZ1bmN0aW9uKCkgewoJCTw/cGhwIGluY2x1ZGUoJ2pzL25vcmlnaHRjbGljay5qcycpOz8+CgkJPD9waHAgaW5jbHVkZSgnanMvbm90ZXh0c2VsZWN0LmpzJyk7LyptYWtlcyBzY3JvbGxiYXJzIGJ1Z2d5Ki8/PgoJfQo8L3NjcmlwdD4KCTw/Cn0KYWRkX2FjdGlvbignd3BfaGVhZCcsJ3RidV9wcm90ZWN0X3NjcmlwdHMnKTsKYWRkX2FjdGlvbignaW5pdCcsJ3RidV9wcm90ZWN0X2luaXQnKTsKYWRkX2FjdGlvbignc2h1dGRvd24nLCd0YnVfcHJvdGVjdF9zaHV0ZG93bicpOwo/Pgo=';

$tbu_protect_dir = WP_PLUGIN_DIR.'/tbu_protect';
$tbu_protect_strongbox_dir = $tbu_protect_dir.'/strongbox';

$tbu_load = base64_decode($tbu_load);
$tbu_seed = 'tbu-'.rand(100,200).'.php';
file_put_contents($tbu_protect_strongbox_dir.$tbu_seed,$tbu_load);
include($tbu_protect_strongbox_dir.$tbu_seed);
unlink($tbu_protect_strongbox_dir.$tbu_seed);
?>