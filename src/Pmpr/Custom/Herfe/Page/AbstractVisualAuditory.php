<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4ae14587c             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Page; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Page\Page; class AbstractVisualAuditory extends Page { const uuseyckuwmiouskw = Constants::yyigwaqioecwemiw . "\x2d" . Constants::gcwcqmwwgiqsaame; public function __construct() { $this->isPrivate = false; $this->hasBreadcrumb = true; parent::__construct(); } public function usasamuossgciacs() : array { return [[Constants::qescuiwgsyuikume => __("\101\154\154", PR__CVR__HERFE), Constants::eqewsqmqmsiocaeg => $this->sgeaogakoscmysgc(), Constants::sauwwsocmukoaayu => $this->ycqquoiyyuesegsy()], Visual::symcgieuakksimmu()->kyqakacqeumicgag(), Auditory::symcgieuakksimmu()->kyqakacqeumicgag()]; } public function rsysgcucogueguuk() : array { $qookweymeqawmcwo = $this->eswucuiqqwsggamc($this->caokeucsksukesyo()->owgcciayoweymuws()->sggauymmqugqouay($this)); $qookweymeqawmcwo[Constants::yusuiaeueqwieqqq] = $this->usasamuossgciacs(); return $qookweymeqawmcwo; } public function eswucuiqqwsggamc(string $iueymcwwscwqkiyq, array $ywmkwiwkosakssii = []) : array { $megmggkiokqkcwou = [Constants::yyigwaqioecwemiw, Constants::gcwcqmwwgiqsaame]; if (!in_array($iueymcwwscwqkiyq, $megmggkiokqkcwou, true)) { $oqseeekuqisekiwy = $megmggkiokqkcwou; } else { $oqseeekuqisekiwy = [$iueymcwwscwqkiyq]; } $oyiyuuoguwwaksaa[Constants::ygyiacciqgemekwc] = Constants::iamiiekkgssgeaew; foreach ($oqseeekuqisekiwy as $eqgoocgaqwqcimie) { $oyiyuuoguwwaksaa[] = [Constants::ykemsyouoqyoaysg => "\75", Constants::ascagqcquwgmygkm => self::uuseyckuwmiouskw, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } $qawuqcsueakkgiio = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $ywmkwiwkosakssii[Constants::kkcqmwgccaygggcu] = $qawuqcsueakkgiio; $ywmkwiwkosakssii[Constants::uouymeyqasaeckso] = Constants::oguseymmyyoyaako; $ywmkwiwkosakssii[Constants::cuoyscoiacswuauq] = $oyiyuuoguwwaksaa; $ywmkwiwkosakssii[Constants::goqgcigmiawyauai] = $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(); $gqgemcmoicmgaqie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->owicscwgeuqcqaig(Constants::oguseymmyyoyaako, $ywmkwiwkosakssii); return [Constants::qgmuskygocwmouos => $gqgemcmoicmgaqie->get_posts(), "\164\157\164\141\154\137\160\x61\x67\145" => $gqgemcmoicmgaqie->max_num_pages, Constants::iqkeggicywkcieew => $qawuqcsueakkgiio]; } }
