<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             654a12f7ce619             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Custom\Herfe\Advertise\Advertise; use Pmpr\Custom\Herfe\CPT\CPT; use Pmpr\Custom\Herfe\CTX\CTX; use Pmpr\Custom\Herfe\Hashure\Hashure; use Pmpr\Custom\Herfe\Page\Page; use Pmpr\Custom\Herfe\Subscription\Subscription; use Pmpr\Custom\Herfe\Woocommerce\Woocommerce; class Herfe extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [self::qescuiwgsyuikume => static function () { return __("\x48\145\162\146\x65\40\x43\x75\163\x74\157\155", PR__CST__HERFE); }, self::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { CPT::symcgieuakksimmu(); CTX::symcgieuakksimmu(); Page::symcgieuakksimmu(); Advertise::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\154\165\147\151\156\x73\137\154\x6f\141\x64\145\144", [$this, "\x69\143\167\143\147\155\143\x6f\151\x6d\x71\145\151\147\171\145"])->qcsmikeggeemccuu("\x77\160", [$this, "\x61\x63\x67\x67\167\141\151\151\155\155\163\x69\161\x6f\145\x63"], 9999); } public function aqyikqugcomoqqqi() { if (!$this->gmiyqqaekqcsoime("\163\x75\x62\x73\x63\x72\x69\160\164\x69\157\156")) { goto wgewmqieuamsoayy; } Subscription::symcgieuakksimmu(); wgewmqieuamsoayy: } public function icwcgmcoimqeigye() { if (!$this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { goto kqgcyoscsusgoaqi; } Hashure::symcgieuakksimmu(); Woocommerce::symcgieuakksimmu(); kqgcyoscsusgoaqi: } public function acggwaiimmsiqoec() { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->goecwaaykqoaaagg()) { goto wakmayaoqoskekqy; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($yeacayasgueouoqc); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($yiasugywggckywoa, self::okmiyqowuqogaiiy, "\x2f"); if (!(trailingslashit($mkomwsiykqigmqca) !== $mkomwsiykqigmqca)) { goto wkeuuycukmuqiaom; } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); $gwgucoaaqcwwciqq = $gkyciwoiiisgywcs->get($yiasugywggckywoa, self::ckiaowgkqoewoseo, $gqusacuooiagkuom->gmigwwwmwemyaayy()); $gqgemcmoicmgaqie = $gkyciwoiiisgywcs->get($yiasugywggckywoa, self::meieskyuuegwwcsy); $aaqqkgyougeiueyq = $gkyciwoiiisgywcs->get($yiasugywggckywoa, self::maiomwmauyekiseg, $gqusacuooiagkuom->wymyeyweagqomiim() ? "\x68\164\x74\x70\163" : "\x68\x74\x74\x70"); $igscmsiuisqaqwkk = "{$aaqqkgyougeiueyq}\72\x2f\x2f{$gwgucoaaqcwwciqq}{$mkomwsiykqigmqca}"; if (!$gqgemcmoicmgaqie) { goto sggawugoykqcmsug; } parse_str($gqgemcmoicmgaqie, $gqgemcmoicmgaqie); if (!$gqgemcmoicmgaqie) { goto ueigkucgaucgeimc; } $igscmsiuisqaqwkk = $mumyimcwkaemyyue->yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $igscmsiuisqaqwkk); ueigkucgaucgeimc: sggawugoykqcmsug: $gqusacuooiagkuom->gwqgmkqcgwwmweom($igscmsiuisqaqwkk); exit; wkeuuycukmuqiaom: wakmayaoqoskekqy: } }
