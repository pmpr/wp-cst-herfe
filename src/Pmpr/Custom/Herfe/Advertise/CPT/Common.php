<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             643ba32ba9709             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Advertise\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\FormMaker\Admin\Element\MetaBox; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Tab; use Pmpr\Common\Foundation\FormMaker\Admin\Field\Group; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Herfe\Advertise\Common as CommonAlias; abstract class Common extends CPT { const aqmqeywcmyguggoo = "\145\x76\x65\156\164"; const gicwoyoeuwosyuau = "\147\141\x6c\154\145\x72\171"; const eskcyegwccqukqwc = "\141\144\x64\x72\x65\x73\x73"; const kueeagiqseeaeogs = "\x61\x64\x76\145\x72\164\x69\x73\145\x72"; const caoyceiaegocywwg = "\155\141\x70\137\x6c\157\x63\141\164\x69\x6f\156"; const wicyseygwoyqqyya = "\163\x6f\143\x69\x61\x6c\137\x61\x63\143\157\165\156\164\163"; const yemysyaskkuqgeyc = "\143\157\156\164\141\x63\164\x5f\151\x6e\x66\x6f\162\x6d\141\x74\x69\157\x6e"; public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->esgmeqiuqsaomgmw(false)->wiskakymeaywyeuw(CommonAlias::cqkewmmoacqamyce); } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { if (!($post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, self::mswoacegomcucaik))) { goto kqgcyoscsusgoaqi; } $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post); $icwicymcioeyeyek["\155\x6f\x72\x65\137\151\x6e\146\x6f\x72\155\141\164\151\157\x6e" . self::icmokuskwoskgace] = sprintf(__("\115\x6f\x72\x65\40\x49\156\146\157\x72\155\141\164\x69\157\x6e\40\101\142\x6f\x75\164\x20\45\163", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::wicyseygwoyqqyya . self::icmokuskwoskgace] = sprintf(__("\45\163\47\163\x20\123\x6f\x63\x69\x61\x6c\x20\x41\143\x63\157\x75\x6e\x74\163", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::yemysyaskkuqgeyc . self::icmokuskwoskgace] = sprintf(__("\45\163\47\163\40\111\156\x66\x6f\162\155\141\x74\x69\x6f\156", PR__CST__HERFE), $meqocwsecsywiiqs); kqgcyoscsusgoaqi: return parent::mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii); } private function eswyqcaiqamoocqa($aokagokqyuysuksm) : Group { return MetaBox::iseogkiymousogom($aokagokqyuysuksm, __("\x49\x74\145\155\163", PR__CST__HERFE))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::qescuiwgsyuikume, __("\124\x69\x74\154\145", PR__CST__HERFE)))->mkksewyosgeumwsa(MetaBox::scgissgkcwaumgky(self::qgqyauaqwqmqseim, __("\x49\x63\157\x6e", PR__CST__HERFE)))->wygoskowywcuyaiq(); } public function ouymyccisioymugo() : Tab { return MetaBox::sgsmqaoowiyocqaa("\x63\157\x6e\164\141\143\164\x5f\x69\x6e\x66\157\x72\155\x61\x74\151\157\x6e", __("\x43\x6f\x6e\164\x61\x63\164\x20\x49\x6e\146\x6f\162\155\x61\164\151\x6f\x6e", PR__CST__HERFE))->mkksewyosgeumwsa($this->eswyqcaiqamoocqa(self::yemysyaskkuqgeyc)->mkksewyosgeumwsa(MetaBox::ckuwucygcwsiawms(self::squoamkioomemiyi, __("\x54\x79\x70\145", PR__CST__HERFE), [self::ogigqueukwysusii => __("\x4c\x69\x6e\153", PR__CST__HERFE), self::memskaacyikisggk => __("\x50\x68\157\x6e\x65", PR__CST__HERFE), self::muqaqimusmckkieq => __("\105\x6d\141\x69\154", PR__CST__HERFE), self::eamuoicwqcokyggc => __("\110\x6f\x75\162\163", PR__CST__HERFE), self::eqcaaskcigqcmmww => __("\x4c\157\x63\141\x74\151\157\156", PR__CST__HERFE)]))->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::ciyoccqkiamemcmm, __("\x56\141\x6c\165\145", PR__CST__HERFE))->yskkmqiusguummwa()))->saemoowcasogykak(IconInterface::eaqiyqmgsusqueum); } public function yucwyuocwkgwwiwy() : Tab { return MetaBox::sgsmqaoowiyocqaa("\x73\x6f\143\x69\141\154\x5f\141\x63\143\157\165\x6e\164\x73", __("\123\x6f\143\151\x61\154\40\x41\x63\143\157\x75\156\164\x73", PR__CST__HERFE))->mkksewyosgeumwsa($this->eswyqcaiqamoocqa(self::wicyseygwoyqqyya)->mkksewyosgeumwsa(MetaBox::ymuegqgyuagyucws(self::auqoykcmsiauccao, __("\125\162\x6c", PR__CST__HERFE))->xkgcwkwsqysqamic()))->saemoowcasogykak(IconInterface::sigiamiycuoykgei); } public function cgyweieiiwqaueke() : array { return [MetaBox::kimoeccokowuaiic(self::mscgqqsgosmsqygq, __("\114\157\x67\x6f", PR__CST__HERFE))->eswksowyeqcsokew(self::egwoacukmsioosum)->esauscaiuyiikmgc(), MetaBox::uouyygwcgsmygaee(self::eskcyegwccqukqwc, __("\101\144\144\162\145\x73\163", PR__CST__HERFE))->qsecygiycssgacqs(3), MetaBox::ymuegqgyuagyucws(self::caoyceiaegocywwg, __("\x4d\x61\160\x20\114\157\x63\x61\x74\151\x6f\x6e\40\x55\162\x6c", PR__CST__HERFE))->xkgcwkwsqysqamic()]; } public function wamymgessigsusmg($soiqkasigoogeiuw) : array { if (is_array($soiqkasigoogeiuw)) { goto ueigkucgaucgeimc; } $soiqkasigoogeiuw = [$soiqkasigoogeiuw]; ueigkucgaucgeimc: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $oyiyuuoguwwaksaa = [self::ygyiacciqgemekwc => self::iamiiekkgssgeaew]; foreach ($soiqkasigoogeiuw as $cmeamwmgwcmoweao) { $oyiyuuoguwwaksaa[] = [self::ykemsyouoqyoaysg => "\x3d", self::ascagqcquwgmygkm => self::gicwoyoeuwosyuau, self::ciyoccqkiamemcmm => $seumokooiykcomco->iooowgsqoyqseyuu($cmeamwmgwcmoweao)]; wkeuuycukmuqiaom: } sggawugoykqcmsug: $qawuqcsueakkgiio = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $wpQuery = $seumokooiykcomco->owicscwgeuqcqaig(self::aqmqeywcmyguggoo, [self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::cuoyscoiacswuauq => $oyiyuuoguwwaksaa, self::gikuasuikwemyqoq => self::wmmucsiyiyusmssm, self::goqgcigmiawyauai => 2]); return [self::qwumqqyuasyskkkc => $wpQuery->get_posts(), self::uiiqiokqwmccomiu => $wpQuery->max_num_pages, self::asmooogmgyecqqka => $qawuqcsueakkgiio]; } }
