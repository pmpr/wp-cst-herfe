<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             63f1fc695e33b             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Advertise\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\Decorator\DecoratorQuery; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group; use Pmpr\Common\Foundation\Manipulate\Post\ManipulatePost; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Herfe\Advertise\Common as CommonAlias; abstract class Common extends CPT { const aqmqeywcmyguggoo = "\x65\166\145\x6e\164"; const gicwoyoeuwosyuau = "\x67\x61\x6c\154\145\x72\171"; const eskcyegwccqukqwc = "\x61\x64\x64\162\145\x73\163"; const kueeagiqseeaeogs = "\x61\144\166\x65\162\164\151\163\x65\x72"; const caoyceiaegocywwg = "\155\141\x70\x5f\x6c\157\x63\141\x74\x69\x6f\x6e"; const wicyseygwoyqqyya = "\163\x6f\x63\151\x61\x6c\x5f\x61\x63\143\157\165\156\x74\x73"; const yemysyaskkuqgeyc = "\143\x6f\156\164\141\x63\x74\x5f\151\x6e\x66\x6f\x72\x6d\x61\164\151\157\156"; public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->esgmeqiuqsaomgmw(false)->wiskakymeaywyeuw(CommonAlias::cqkewmmoacqamyce); } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { if (!($post = ManipulateArray::get($ywmkwiwkosakssii, self::mswoacegomcucaik))) { goto eqkauqciwewmgeoi; } $meqocwsecsywiiqs = ManipulatePost::qcgakseyaikigqco($post); $icwicymcioeyeyek["\155\157\162\145\137\x69\156\x66\157\x72\155\141\x74\x69\x6f\156" . self::icmokuskwoskgace] = sprintf(__("\115\x6f\162\x65\40\x49\x6e\146\157\x72\x6d\x61\164\x69\157\156\40\x41\142\x6f\x75\164\x20\x25\163", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::wicyseygwoyqqyya . self::icmokuskwoskgace] = sprintf(__("\x25\x73\47\x73\40\x53\157\143\x69\x61\154\40\x41\x63\x63\157\x75\x6e\x74\x73", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::yemysyaskkuqgeyc . self::icmokuskwoskgace] = sprintf(__("\x25\x73\47\163\x20\111\156\x66\157\162\x6d\x61\164\151\x6f\x6e", PR__CST__HERFE), $meqocwsecsywiiqs); eqkauqciwewmgeoi: return parent::mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii); } private function eswyqcaiqamoocqa($aokagokqyuysuksm) : Group { return MetaBox::iseogkiymousogom($aokagokqyuysuksm, __("\x49\x74\x65\155\163", PR__CST__HERFE))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\x69\164\154\x65", PR__CST__HERFE)))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::qgqyauaqwqmqseim, __("\x49\143\157\156", PR__CST__HERFE)))->wygoskowywcuyaiq(); } public function ouymyccisioymugo() : Tab { return MetaBox::sgsmqaoowiyocqaa("\x63\157\x6e\x74\x61\x63\x74\x5f\x69\156\x66\157\162\155\141\x74\x69\x6f\x6e", __("\x43\x6f\x6e\164\141\143\x74\x20\x49\x6e\146\x6f\162\155\141\164\x69\157\156", PR__CST__HERFE))->mkksewyosgeumwsa($this->eswyqcaiqamoocqa(self::yemysyaskkuqgeyc)->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::squoamkioomemiyi, __("\x54\171\160\145", PR__CST__HERFE), [self::ogigqueukwysusii => __("\x4c\x69\x6e\x6b", PR__CST__HERFE), self::memskaacyikisggk => __("\120\x68\x6f\156\145", PR__CST__HERFE), self::muqaqimusmckkieq => __("\x45\155\141\151\x6c", PR__CST__HERFE), self::eamuoicwqcokyggc => __("\x48\x6f\165\162\163", PR__CST__HERFE), self::eqcaaskcigqcmmww => __("\114\x6f\143\141\x74\x69\157\156", PR__CST__HERFE)]))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::ciyoccqkiamemcmm, __("\x56\141\x6c\x75\x65", PR__CST__HERFE))->yskkmqiusguummwa()))->saemoowcasogykak(IconInterface::eaqiyqmgsusqueum); } public function yucwyuocwkgwwiwy() : Tab { return MetaBox::sgsmqaoowiyocqaa("\x73\x6f\143\151\141\154\137\x61\x63\x63\x6f\x75\x6e\164\x73", __("\123\157\x63\151\x61\x6c\40\101\x63\x63\157\165\156\164\x73", PR__CST__HERFE))->mkksewyosgeumwsa($this->eswyqcaiqamoocqa(self::wicyseygwoyqqyya)->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::auqoykcmsiauccao, __("\x55\x72\x6c", PR__CST__HERFE))->xkgcwkwsqysqamic()))->saemoowcasogykak(IconInterface::sigiamiycuoykgei); } public function cgyweieiiwqaueke() : array { return [MetaBox::kimoeccokowuaiic(self::mscgqqsgosmsqygq, __("\114\157\147\x6f", PR__CST__HERFE))->eswksowyeqcsokew(self::egwoacukmsioosum)->esauscaiuyiikmgc(), MetaBox::uouyygwcgsmygaee(self::eskcyegwccqukqwc, __("\101\x64\144\x72\145\x73\163", PR__CST__HERFE))->qsecygiycssgacqs(3), MetaBox::ymuegqgyuagyucws(self::caoyceiaegocywwg, __("\115\141\160\40\114\x6f\143\141\164\x69\157\x6e\40\x55\x72\154", PR__CST__HERFE))->xkgcwkwsqysqamic()]; } public function wamymgessigsusmg($soiqkasigoogeiuw) : array { if (is_array($soiqkasigoogeiuw)) { goto kwagwqyusyiyoaqs; } $soiqkasigoogeiuw = [$soiqkasigoogeiuw]; kwagwqyusyiyoaqs: $oyiyuuoguwwaksaa = [self::ygyiacciqgemekwc => self::iamiiekkgssgeaew]; foreach ($soiqkasigoogeiuw as $cmeamwmgwcmoweao) { $oyiyuuoguwwaksaa[] = [self::ykemsyouoqyoaysg => "\75", self::ascagqcquwgmygkm => self::gicwoyoeuwosyuau, self::ciyoccqkiamemcmm => ManipulatePost::mwikyscisascoeea($cmeamwmgwcmoweao)]; kiqogmwcgcamwiig: } yowsmsiyimmimemc: $qawuqcsueakkgiio = max(1, DecoratorQuery::qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $wpQuery = ManipulatePost::owicscwgeuqcqaig(self::aqmqeywcmyguggoo, [self::cuoyscoiacswuauq => $oyiyuuoguwwaksaa, self::gikuasuikwemyqoq => self::wmmucsiyiyusmssm, self::goqgcigmiawyauai => 2, self::kkcqmwgccaygggcu => $qawuqcsueakkgiio]); return [self::qwumqqyuasyskkkc => $wpQuery->get_posts(), self::uiiqiokqwmccomiu => $wpQuery->max_num_pages, "\143\x75\x72\x72\x65\x6e\x74" => $qawuqcsueakkgiio]; } }
