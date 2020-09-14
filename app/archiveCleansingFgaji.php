<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $tglgaji
 * @property integer $kdjnstrans
 * @property string $nip
 * @property string $nama
 * @property string $glrdepan
 * @property string $glrbelakang
 * @property integer $kdjenkel
 * @property boolean $tgllhr
 * @property integer $kdstawin
 * @property integer $jistri
 * @property integer $janak
 * @property integer $kdstapeg
 * @property boolean $tmtstop
 * @property string $kdpangkat
 * @property integer $masker
 * @property float $prsngapok
 * @property string $tmttabel
 * @property string $kdeselon
 * @property string $kdfungsi
 * @property string $kdguru
 * @property integer $kdstruk
 * @property integer $kdberas
 * @property integer $kdlangka
 * @property string $kdterpencil
 * @property integer $kdtkd
 * @property string $kdtjkhusus
 * @property string $kdkorpri
 * @property string $kdkoperasi
 * @property string $kdirdhata
 * @property int $gapok
 * @property int $tjistri
 * @property int $tjanak
 * @property int $tjtpp
 * @property int $tjeselon
 * @property int $tjfungsi
 * @property int $tjstruk
 * @property int $tjguru
 * @property int $tjlangka
 * @property int $tjtkd
 * @property int $tjterpencil
 * @property int $tjkhusus
 * @property int $tjberas
 * @property int $tjpajak
 * @property int $tjaskes
 * @property int $tjumum
 * @property int $tjkk
 * @property int $tjkm
 * @property int $tbulat
 * @property int $kotor
 * @property int $piwp
 * @property int $piwp8
 * @property int $piwp2
 * @property int $paskes
 * @property int $ppajak
 * @property int $pbulog
 * @property int $ptaperum
 * @property int $psewa
 * @property int $phutang
 * @property int $pkorpri
 * @property int $pirdhata
 * @property int $pkoperasi
 * @property int $pjkk
 * @property int $pjkm
 * @property int $potongan
 * @property int $bersih
 * @property string $nodosir
 * @property string $kdssbp
 * @property string $kdskpd
 * @property string $kdsatker
 * @property string $npwp
 * @property string $niplama
 * @property integer $kdhitung
 * @property string $kodebyr
 * @property string $norek
 * @property string $catatan
 * @property int $nu
 * @property int $hal
 * @property int $jeniskekurangan
 * @property int $kd_zakat
 * @property string $noktp
 * @property string $tmt_rapel
 * @property string $tat_rapel
 * @property int $jml_bulan
 * @property int $jnsguru
 * @property string $kddati1
 * @property string $kddati2
 * @property float $bln_gaji
 * @property float $thn_gaji
 * @property string $pemda
 * @property string $updated_at
 * @property string $created_at
 */
class archiveCleansingFgaji extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'archive_cleansing_fgaji';

    protected $primaryKey = 'id';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';


    /**
     * @var array
     */
    protected $fillable = ['tglgaji', 'kdjnstrans', 'nip', 'nama', 'glrdepan', 'glrbelakang', 'kdjenkel', 'tgllhr', 'kdstawin', 'jistri', 'janak', 'kdstapeg', 'tmtstop', 'kdpangkat', 'masker', 'prsngapok', 'tmttabel', 'kdeselon', 'kdfungsi', 'kdguru', 'kdstruk', 'kdberas', 'kdlangka', 'kdterpencil', 'kdtkd', 'kdtjkhusus', 'kdkorpri', 'kdkoperasi', 'kdirdhata', 'gapok', 'tjistri', 'tjanak', 'tjtpp', 'tjeselon', 'tjfungsi', 'tjstruk', 'tjguru', 'tjlangka', 'tjtkd', 'tjterpencil', 'tjkhusus', 'tjberas', 'tjpajak', 'tjaskes', 'tjumum', 'tjkk', 'tjkm', 'tbulat', 'kotor', 'piwp', 'piwp8', 'piwp2', 'paskes', 'ppajak', 'pbulog', 'ptaperum', 'psewa', 'phutang', 'pkorpri', 'pirdhata', 'pkoperasi', 'pjkk', 'pjkm', 'potongan', 'bersih', 'nodosir', 'kdssbp', 'kdskpd', 'kdsatker', 'npwp', 'niplama', 'kdhitung', 'kodebyr', 'norek', 'catatan', 'nu', 'hal', 'jeniskekurangan', 'kd_zakat', 'noktp', 'tmt_rapel', 'tat_rapel', 'jml_bulan', 'jnsguru', 'kddati1', 'kddati2', 'bln_gaji', 'thn_gaji', 'pemda', 'updated_at', 'created_at'];

}
