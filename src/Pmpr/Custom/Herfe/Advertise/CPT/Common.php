<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             668707dc01428             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Advertise\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Custom\Herfe\Interfaces\CommonInterface; use WP_Query; abstract class Common extends CPT implements CommonInterface { const eskcyegwccqukqwc = "\141\144\144\x72\145\x73\163"; const caoyceiaegocywwg = "\x6d\141\x70\x5f\x6c\x6f\x63\x61\164\x69\157\156"; const wicyseygwoyqqyya = "\x73\157\x63\151\141\154\137\x61\x63\x63\157\165\156\164\x73"; const yemysyaskkuqgeyc = "\x63\x6f\156\x74\141\143\164\x5f\x69\156\x66\x6f\x72\155\141\x74\x69\x6f\156"; public function __construct($aokagokqyuysuksm = null) { parent::__construct($aokagokqyuysuksm); $this->oyeskqayoscwciem()->hsgasemokseccoao($this->miwqiiqeegeqcwis()); } public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->soeowumgcwuiaica(true)->esgmeqiuqsaomgmw(false)->kwksqwkmuuoakaqg(true)->wiskakymeaywyeuw(self::cqkewmmoacqamyce); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x70\162\x65\137\147\x65\x74\x5f\160\x6f\x73\x74\x73", [$this, "\x63\163\157\x73\x6f\x77\x63\x67\x65\153\x67\x75\151\147\x71\153"])->cecaguuoecmccuse("\165\163\145\x72\x5f\150\141\163\x5f\x63\x61\160", [$this, "\x71\161\171\x73\165\x79\163\171\x61\171\x65\x73\x79\157\x61\155"], 10, 3); parent::kgquecmsgcouyaya(); } public function ucgqwmuigscaceuu() : bool { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); return !$ewgmommeawggyaek->scmcyesmmikkucie(self::gewmeskawiqikkoc) && $ewgmommeawggyaek->scmcyesmmikkucie(self::kueeagiqseeaeogs); } public function qqysuysyayesyoam($smiuugcoukoiceoq, $smgioooysaacyigy, $ywmkwiwkosakssii) { if (!(isset($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[2]) && $this->ucgqwmuigscaceuu())) { goto suqkuqygkkgwyaie; } $gmgycmymygamqwsk = ["\x65\144\x69\x74\x5f\160\x6f\163\164", "\144\145\154\145\164\145\137\x70\157\x73\x74"]; if (!in_array($ywmkwiwkosakssii[0], $gmgycmymygamqwsk)) { goto aegysmeecgcgayyw; } $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); $wyoiwuqokyeeuguk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($useksmwkuswkwcqg, [], self::oyaoekcogwkcekcc); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($ywmkwiwkosakssii[2]); if (!($seumokooiykcomco->gueasuouwqysmomu($post) === $useksmwkuswkwcqg)) { goto gaomwagkcciesyqy; } if (!(!$this->amgkkwcswommwoqw() || !$seumokooiykcomco->uqwgsuysegkweago($useksmwkuswkwcqg, self::ocayisqocqoekqiq))) { goto esuiysskoweawsue; } if (in_array($seumokooiykcomco->iooowgsqoyqseyuu($post), $wyoiwuqokyeeuguk, true)) { goto uqqaiagaeqgqgaiy; } foreach ((array) $smgioooysaacyigy as $gkswkiicccswksiq) { if (!array_key_exists($gkswkiicccswksiq, $smiuugcoukoiceoq)) { goto uguigkcmukuouway; } $smiuugcoukoiceoq[$gkswkiicccswksiq] = false; uguigkcmukuouway: qicwaskssogcokgm: } usquiuuyiyqaeyiu: uqqaiagaeqgqgaiy: esuiysskoweawsue: gaomwagkcciesyqy: aegysmeecgcgayyw: suqkuqygkkgwyaie: return $smiuugcoukoiceoq; } public function csosowcgekguigqk($gqgemcmoicmgaqie) { $uqewsooiogygggym = $gqgemcmoicmgaqie->get(self::uouymeyqasaeckso); if (is_array($uqewsooiogygggym)) { goto soaccwqimeksgwiw; } $uqewsooiogygggym = [$uqewsooiogygggym]; soaccwqimeksgwiw: if (!($gqgemcmoicmgaqie instanceof WP_Query && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && in_array($this->miwqiiqeegeqcwis(), $uqewsooiogygggym))) { goto skkamseieeusycye; } if (!$this->ucgqwmuigscaceuu()) { goto wiysogeqqwgioyka; } $gqgemcmoicmgaqie = $this->msqgaouaissgquek($gqgemcmoicmgaqie); wiysogeqqwgioyka: skkamseieeusycye: return $gqgemcmoicmgaqie; } public abstract function msqgaouaissgquek(WP_Query $gqgemcmoicmgaqie) : WP_Query; public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { if (!($post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, self::mswoacegomcucaik))) { goto cgiscsqwwgqqaeqi; } $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post); $icwicymcioeyeyek["\x6d\x6f\x72\145\x5f\151\x6e\146\157\162\x6d\141\x74\x69\157\156" . self::icmokuskwoskgace] = sprintf(__("\115\157\x72\145\x20\x49\x6e\x66\x6f\x72\155\141\x74\x69\x6f\x6e\x20\101\x62\x6f\165\x74\x20\x25\x73", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::wicyseygwoyqqyya . self::icmokuskwoskgace] = sprintf(__("\45\x73\47\x73\x20\123\157\x63\151\141\154\40\x41\143\143\157\165\x6e\x74\163", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::yemysyaskkuqgeyc . self::icmokuskwoskgace] = sprintf(__("\45\163\47\163\40\x49\156\x66\x6f\x72\x6d\141\x74\151\x6f\x6e", PR__CST__HERFE), $meqocwsecsywiiqs); cgiscsqwwgqqaeqi: return parent::mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii); } private function wcwascmcugywicqi($aokagokqyuysuksm) : Collection { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->qqmgmgasauucoago($aokagokqyuysuksm)->gswweykyogmsyawy(__("\111\164\145\155\163", PR__CST__HERFE))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::qescuiwgsyuikume)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x54\x69\164\154\x65", PR__CST__HERFE)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\143\x6f\x6e", PR__CST__HERFE))->mmwqwkuqkqccuqye()->mkmssscwmeekwgqo())->usosgsaaimqcysyk(); } public function ouymyccisioymugo() : Tab { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\143\157\156\x74\x61\x63\x74\137\151\x6e\146\x6f\162\x6d\x61\x74\151\x6f\x6e")->saemoowcasogykak(IconInterface::eaqiyqmgsusqueum)->gswweykyogmsyawy(__("\103\x6f\x6e\x74\x61\x63\x74\40\111\156\x66\x6f\x72\155\x61\164\x69\x6f\x6e", PR__CST__HERFE))->mkksewyosgeumwsa($this->wcwascmcugywicqi(self::yemysyaskkuqgeyc)->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::squoamkioomemiyi)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x54\171\160\x65", PR__CST__HERFE))->acauweqyyugwisqc([self::ogigqueukwysusii => __("\114\151\156\x6b", PR__CST__HERFE), self::memskaacyikisggk => __("\x50\x68\157\156\145", PR__CST__HERFE), self::muqaqimusmckkieq => __("\x45\155\x61\151\154", PR__CST__HERFE), self::eamuoicwqcokyggc => __("\110\157\165\162\x73", PR__CST__HERFE), self::eqcaaskcigqcmmww => __("\114\x6f\143\x61\x74\x69\x6f\156", PR__CST__HERFE)]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::ciyoccqkiamemcmm)->gswweykyogmsyawy(__("\126\x61\x6c\165\145", PR__CST__HERFE))->kqqqugemmqagucuq()->mkmssscwmeekwgqo())); } public function yucwyuocwkgwwiwy() : Tab { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\163\157\x63\151\141\154\x5f\x61\x63\143\x6f\x75\x6e\164\163")->gswweykyogmsyawy(__("\123\157\x63\x69\x61\x6c\40\x41\x63\143\x6f\165\x6e\x74\163", PR__CST__HERFE))->saemoowcasogykak(IconInterface::sigiamiycuoykgei)->mkksewyosgeumwsa($this->wcwascmcugywicqi(self::wicyseygwoyqqyya)->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::auqoykcmsiauccao)->gswweykyogmsyawy(__("\125\162\154", PR__CST__HERFE))->xkgcwkwsqysqamic()->mkmssscwmeekwgqo())); } public function cgyweieiiwqaueke() : array { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return [$uuyucgkyusckoaeq->quaegkgkucwyeiqg(self::mscgqqsgosmsqygq)->gswweykyogmsyawy(__("\x4c\x6f\x67\x6f", PR__CST__HERFE))->eswksowyeqcsokew(self::egwoacukmsioosum)->mkmssscwmeekwgqo()->ycueqsmmommygueu(), $uuyucgkyusckoaeq->uouyygwcgsmygaee(self::eskcyegwccqukqwc)->gswweykyogmsyawy(__("\101\x64\144\x72\x65\x73\x73", PR__CST__HERFE))->qsecygiycssgacqs(3)->mkmssscwmeekwgqo(), $uuyucgkyusckoaeq->ymuegqgyuagyucws(self::caoyceiaegocywwg)->gswweykyogmsyawy(__("\x4d\141\x70\x20\x4c\x6f\143\141\164\151\x6f\156\x20\x55\162\x6c", PR__CST__HERFE))->xkgcwkwsqysqamic()->mkmssscwmeekwgqo()]; } public function wamymgessigsusmg($soiqkasigoogeiuw) : array { if (is_array($soiqkasigoogeiuw)) { goto syiqkaasoueowwui; } $soiqkasigoogeiuw = [$soiqkasigoogeiuw]; syiqkaasoueowwui: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $oyiyuuoguwwaksaa = [self::ygyiacciqgemekwc => self::iamiiekkgssgeaew]; foreach ($soiqkasigoogeiuw as $cmeamwmgwcmoweao) { $oyiyuuoguwwaksaa[] = [self::ykemsyouoqyoaysg => "\x3d", self::ascagqcquwgmygkm => self::gicwoyoeuwosyuau, self::ciyoccqkiamemcmm => $seumokooiykcomco->iooowgsqoyqseyuu($cmeamwmgwcmoweao)]; ewymsmkkiksgwysk: } giaacoqqqsekcayy: $qawuqcsueakkgiio = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(self::kkcqmwgccaygggcu, 1)); $wpQuery = $seumokooiykcomco->owicscwgeuqcqaig(self::aqmqeywcmyguggoo, [self::kkcqmwgccaygggcu => $qawuqcsueakkgiio, self::cuoyscoiacswuauq => $oyiyuuoguwwaksaa, self::gikuasuikwemyqoq => self::wmmucsiyiyusmssm, self::goqgcigmiawyauai => 2]); return [self::qwumqqyuasyskkkc => $wpQuery->get_posts(), self::uiiqiokqwmccomiu => $wpQuery->max_num_pages, self::asmooogmgyecqqka => $qawuqcsueakkgiio]; } public function kmqoyaiymkcmomwi($aiooqyausygaasqm, $aigsgikoosikweqa) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ycuekasamuuasigw = $seumokooiykcomco->iooowgsqoyqseyuu($aigsgikoosikweqa); $cwgqkcumeaswoscu = $seumokooiykcomco->iooowgsqoyqseyuu($aiooqyausygaasqm); if (!($ycuekasamuuasigw !== $seumokooiykcomco->igawqaomowicuayw(self::kueeagiqseeaeogs, $cwgqkcumeaswoscu))) { goto cmegwsegsosyqcai; } $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw(self::kueeagiqseeaeogs, $ycuekasamuuasigw, $cwgqkcumeaswoscu); cmegwsegsosyqcai: } public function amgkkwcswommwoqw() : bool { return true; } }
