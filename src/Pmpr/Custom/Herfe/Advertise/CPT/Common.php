<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             65a194df91973             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Advertise\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Herfe\Interfaces\CommonInterface; use WP_Query; abstract class Common extends CPT implements CommonInterface { const eskcyegwccqukqwc = "\x61\144\x64\x72\145\x73\x73"; const caoyceiaegocywwg = "\x6d\x61\x70\137\154\157\143\141\x74\x69\x6f\156"; const wicyseygwoyqqyya = "\x73\x6f\x63\x69\141\x6c\x5f\141\x63\143\157\x75\156\164\163"; const yemysyaskkuqgeyc = "\x63\x6f\x6e\x74\x61\x63\x74\137\151\156\x66\157\x72\155\141\x74\151\157\x6e"; public function __construct($aokagokqyuysuksm = null) { parent::__construct($aokagokqyuysuksm); $this->oyeskqayoscwciem()->hsgasemokseccoao($this->miwqiiqeegeqcwis()); } public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->soeowumgcwuiaica(true)->esgmeqiuqsaomgmw(false)->kwksqwkmuuoakaqg(true)->wiskakymeaywyeuw(self::cqkewmmoacqamyce); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\162\145\x5f\x67\x65\164\x5f\x70\157\163\x74\x73", [$this, "\x63\x73\157\x73\x6f\x77\143\147\x65\153\147\x75\x69\147\x71\x6b"])->cecaguuoecmccuse("\165\x73\145\x72\x5f\150\x61\x73\x5f\x63\x61\160", [$this, "\161\161\x79\x73\165\x79\x73\x79\141\x79\x65\x73\171\x6f\141\x6d"], 10, 3); parent::kgquecmsgcouyaya(); } public function ucgqwmuigscaceuu() : bool { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); return !$ewgmommeawggyaek->scmcyesmmikkucie(self::gewmeskawiqikkoc) && $ewgmommeawggyaek->scmcyesmmikkucie(self::kueeagiqseeaeogs); } public function qqysuysyayesyoam($smiuugcoukoiceoq, $smgioooysaacyigy, $ywmkwiwkosakssii) { if (!(isset($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[2]) && $this->ucgqwmuigscaceuu())) { goto sqmoqymckwsogsqg; } $gmgycmymygamqwsk = ["\145\144\x69\x74\x5f\x70\157\x73\164", "\144\145\154\145\164\x65\137\160\x6f\x73\x74"]; if (!in_array($ywmkwiwkosakssii[0], $gmgycmymygamqwsk)) { goto gqmewagyagamokok; } $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); $wyoiwuqokyeeuguk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($useksmwkuswkwcqg, [], self::oyaoekcogwkcekcc); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($ywmkwiwkosakssii[2]); if (!($seumokooiykcomco->gueasuouwqysmomu($post) === $useksmwkuswkwcqg)) { goto oyiuemaaykgkqqam; } if (!(!$this->amgkkwcswommwoqw() || !$seumokooiykcomco->uqwgsuysegkweago($useksmwkuswkwcqg, self::ocayisqocqoekqiq))) { goto ussceseaimqywuiy; } if (in_array($seumokooiykcomco->iooowgsqoyqseyuu($post), $wyoiwuqokyeeuguk, true)) { goto mkomygccqkmkumsi; } foreach ((array) $smgioooysaacyigy as $gkswkiicccswksiq) { if (!array_key_exists($gkswkiicccswksiq, $smiuugcoukoiceoq)) { goto cgmgqucewwssmicq; } $smiuugcoukoiceoq[$gkswkiicccswksiq] = false; cgmgqucewwssmicq: ciucewqgyoiouesq: } osuscoaaomwcqkew: mkomygccqkmkumsi: ussceseaimqywuiy: oyiuemaaykgkqqam: gqmewagyagamokok: sqmoqymckwsogsqg: return $smiuugcoukoiceoq; } public function csosowcgekguigqk($gqgemcmoicmgaqie) { $uqewsooiogygggym = $gqgemcmoicmgaqie->get(self::uouymeyqasaeckso); if (is_array($uqewsooiogygggym)) { goto uycesqqkoeamocgm; } $uqewsooiogygggym = [$uqewsooiogygggym]; uycesqqkoeamocgm: if (!($gqgemcmoicmgaqie instanceof WP_Query && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && in_array($this->miwqiiqeegeqcwis(), $uqewsooiogygggym))) { goto ukomuiwukymcoaso; } if (!$this->ucgqwmuigscaceuu()) { goto ceiwqkyquikcemmo; } $gqgemcmoicmgaqie = $this->msqgaouaissgquek($gqgemcmoicmgaqie); ceiwqkyquikcemmo: ukomuiwukymcoaso: return $gqgemcmoicmgaqie; } public abstract function msqgaouaissgquek(WP_Query $gqgemcmoicmgaqie) : WP_Query; public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { if (!($post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, self::mswoacegomcucaik))) { goto wkgskiuiukiuyque; } $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post); $icwicymcioeyeyek["\x6d\x6f\x72\x65\x5f\151\x6e\146\x6f\x72\x6d\x61\164\151\x6f\156" . self::icmokuskwoskgace] = sprintf(__("\115\157\x72\145\x20\111\x6e\146\157\x72\x6d\x61\164\151\x6f\156\40\x41\142\x6f\x75\164\x20\45\x73", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::wicyseygwoyqqyya . self::icmokuskwoskgace] = sprintf(__("\x25\163\x27\163\40\x53\x6f\x63\x69\141\154\x20\x41\143\143\157\165\156\x74\x73", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::yemysyaskkuqgeyc . self::icmokuskwoskgace] = sprintf(__("\45\x73\x27\x73\x20\x49\156\x66\157\x72\155\x61\x74\x69\157\x6e", PR__CST__HERFE), $meqocwsecsywiiqs); wkgskiuiukiuyque: return parent::mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii); } private function wcwascmcugywicqi($aokagokqyuysuksm) : Collection { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->qqmgmgasauucoago($aokagokqyuysuksm)->gswweykyogmsyawy(__("\111\x74\145\155\163", PR__CST__HERFE))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::qescuiwgsyuikume)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x54\151\x74\154\145", PR__CST__HERFE)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\x49\x63\x6f\x6e", PR__CST__HERFE))->mmwqwkuqkqccuqye()->mkmssscwmeekwgqo())->usosgsaaimqcysyk(); } public function ouymyccisioymugo() : Tab { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\143\157\x6e\x74\x61\x63\164\137\x69\156\146\157\x72\155\141\x74\x69\157\x6e")->saemoowcasogykak(IconInterface::eaqiyqmgsusqueum)->gswweykyogmsyawy(__("\x43\157\156\x74\x61\x63\x74\40\111\156\x66\x6f\162\x6d\x61\x74\151\157\156", PR__CST__HERFE))->mkksewyosgeumwsa($this->wcwascmcugywicqi(self::yemysyaskkuqgeyc)->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::squoamkioomemiyi)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x54\x79\160\x65", PR__CST__HERFE))->acauweqyyugwisqc([self::ogigqueukwysusii => __("\114\x69\x6e\153", PR__CST__HERFE), self::memskaacyikisggk => __("\120\150\157\x6e\x65", PR__CST__HERFE), self::muqaqimusmckkieq => __("\x45\x6d\x61\151\x6c", PR__CST__HERFE), self::eamuoicwqcokyggc => __("\x48\x6f\x75\x72\163", PR__CST__HERFE), self::eqcaaskcigqcmmww => __("\x4c\157\143\x61\164\x69\x6f\x6e", PR__CST__HERFE)]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::ciyoccqkiamemcmm)->gswweykyogmsyawy(__("\126\141\154\x75\145", PR__CST__HERFE))->kqqqugemmqagucuq()->mkmssscwmeekwgqo())); } public function yucwyuocwkgwwiwy() : Tab { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\x73\x6f\143\x69\141\x6c\137\x61\x63\143\157\165\x6e\x74\163")->gswweykyogmsyawy(__("\x53\157\143\x69\141\x6c\40\101\143\x63\x6f\x75\156\x74\x73", PR__CST__HERFE))->saemoowcasogykak(IconInterface::sigiamiycuoykgei)->mkksewyosgeumwsa($this->wcwascmcugywicqi(self::wicyseygwoyqqyya)->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::auqoykcmsiauccao)->gswweykyogmsyawy(__("\x55\162\x6c", PR__CST__HERFE))->xkgcwkwsqysqamic()->mkmssscwmeekwgqo())); } public function cgyweieiiwqaueke() : array { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return [$uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::mscgqqsgosmsqygq)->gswweykyogmsyawy(__("\x4c\157\x67\157", PR__CST__HERFE))->eswksowyeqcsokew(self::egwoacukmsioosum)->mkmssscwmeekwgqo()->ycueqsmmommygueu(), $uuyucgkyusckoaeq->uouyygwcgsmygaee(self::eskcyegwccqukqwc)->gswweykyogmsyawy(__("\101\144\x64\x72\145\x73\163", PR__CST__HERFE))->qsecygiycssgacqs(3)->mkmssscwmeekwgqo(), $uuyucgkyusckoaeq->ymuegqgyuagyucws(self::caoyceiaegocywwg)->gswweykyogmsyawy(__("\115\x61\x70\40\114\x6f\143\141\x74\x69\157\156\x20\x55\x72\154", PR__CST__HERFE))->xkgcwkwsqysqamic()->mkmssscwmeekwgqo()]; } public function wamymgessigsusmg($soiqkasigoogeiuw) : array { if (is_array($soiqkasigoogeiuw)) { goto oyiuyywyeoskckuw; } $soiqkasigoogeiuw = [$soiqkasigoogeiuw]; oyiuyywyeoskckuw: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $oyiyuuoguwwaksaa = [self::ygyiacciqgemekwc => self::iamiiekkgssgeaew]; foreach ($soiqkasigoogeiuw as $cmeamwmgwcmoweao) { $oyiyuuoguwwaksaa[] = [self::ykemsyouoqyoaysg => "\x3d", self::ascagqcquwgmygkm => self::gicwoyoeuwosyuau, self::ciyoccqkiamemcmm => $seumokooiykcomco->iooowgsqoyqseyuu($cmeamwmgwcmoweao)]; siecswkggyikqkga: } goqmywuiicciasyk: $qawuqcsueakkgiio = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $wpQuery = $seumokooiykcomco->owicscwgeuqcqaig(self::aqmqeywcmyguggoo, [self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::cuoyscoiacswuauq => $oyiyuuoguwwaksaa, self::gikuasuikwemyqoq => self::wmmucsiyiyusmssm, self::goqgcigmiawyauai => 2]); return [self::qwumqqyuasyskkkc => $wpQuery->get_posts(), self::uiiqiokqwmccomiu => $wpQuery->max_num_pages, self::asmooogmgyecqqka => $qawuqcsueakkgiio]; } public function kmqoyaiymkcmomwi($aiooqyausygaasqm, $aigsgikoosikweqa) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ycuekasamuuasigw = $seumokooiykcomco->iooowgsqoyqseyuu($aigsgikoosikweqa); $cwgqkcumeaswoscu = $seumokooiykcomco->iooowgsqoyqseyuu($aiooqyausygaasqm); if (!($ycuekasamuuasigw !== $seumokooiykcomco->igawqaomowicuayw(self::kueeagiqseeaeogs, $cwgqkcumeaswoscu))) { goto qkuiwoqksgayqqmg; } $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw(self::kueeagiqseeaeogs, $ycuekasamuuasigw, $cwgqkcumeaswoscu); qkuiwoqksgayqqmg: } public function amgkkwcswommwoqw() : bool { return true; } }
