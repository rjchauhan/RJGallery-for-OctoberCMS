<?php

return [
    'plugin' => [
        'name' => 'Resim Galerisi',
        'description' => 'Dinamik tasarımı ile web siteniz için fotoğraf galerisi oluşturabilirsiniz.'
    ],
    'permissions' => [
        'all' => 'Manage galleries'
    ],
    'misc' => [
    	'newgallery' => 'Yeni Galeri',
    	'sure' => 'Silmek istediğinize emin misiniz?',
    	'remove' => 'Sil',
        'title' => 'Başlık',
        'description' => 'Galerinin başlığı',
        'defaultname' => 'Galeri'
    ],
    'form' => [
    	'create' => 'Galeri Oluştur',
    	'update' => 'Galerileri Güncelle',
    	'preview' => 'Galerileri Önizle',
    	'manage' => 'Galerileri Yönet'
    ],
    'modeldata' => [
    	'name' => 'Galeri Adı',
    	'created' => 'Oluşturulma',
    	'updated' => 'Güncellenme',
    	'images' => 'Resimler'
    ],
    'create' => [
    	'galleries' => 'Galeriler',
    	'creating' => 'Galeri Oluşturuluyor...',
    	'create' => 'Oluştur',
    	'createclose' => 'Oluştur ve Kapat',
    	'cancel' => 'İptal',
    	'or' => 'veya',
    	'return' => 'Galeri listesine geri dön'
    ],
    'update' => [
    	'saving' => 'Galeri Kaydediliyor...',
    	'save' => 'Kaydet',
    	'saveclose' => 'Kaydet ve Kapat',
    	'deleting' => 'Galeri Siliniyor...',
    	'reallydelete' => 'Galeriyi silmek istediğinize emin misiniz?'
    ],
    'menu' => [
    	'name' => 'Resim Galerisi',
        'description' => 'Tam ekran önizleme ve slayt gösterisi olan bir fotoğraf galerisi oluşturun'
    ],
    'groups' => [
        'options' => 'Ayarlar',
        'effects' => 'Efektler',
        'thumbs' => 'Küçük Resim Ayarları'
    ],
    'idgallery' => [
        'title' => 'Resim Galerisi',
        'description' => 'Gösterilecek galeriyi seçin'
    ],
    'jqueryinject' => [
        'title' => 'jQuery Enjekte Et',
        'description' => 'jQuery\'i dahil etmek istiyor musunuz?',
        'optionsyes' => 'Evet',
        'optionsno' => 'Hayır'
    ],
    'thumbnail' => [
        'title' => 'Küçük Görsel Önizleme',
        'description' => 'Küçük görseli göstermek için bir buton göstermek istiyor musunuz?',
        'optionstrue' => 'Evet',
        'optionsfalse' => 'Hayır'
    ],
    'caption' => [
        'title' => 'Görsel Altyazısı',
        'description' => 'Görsel altyazılarını göster',
        'optionstrue' => 'Evet',
        'optionsfalse' => 'Hayır'
    ],
    'desc' => [
        'title' => 'Görsel Tanımı',
        'description' => 'Görsel tanımlarını göster',
        'optionstrue' => 'Evet',
        'optionsfalse' => 'Hayır'
    ],
    'counter' => [
        'title' => 'Görsel Sayacı',
        'description' => 'Mevcut görselin kaçıncı sırada olduğunu ve toplam görsel sayısını gösterir',
        'optionstrue' => 'Evet',
        'optionsfalse' => 'Hayır'
    ],
    'controls' => [
        'title' => 'İleri/Geri Kontrolleri',
        'description' => 'İLERİ/GERİ butonlarını göster',
        'optionstrue' => 'Evet',
        'optionsfalse' => 'Hayır'
    ],
    'preload' => [
        'title' => 'Önceden Yükle',
        'description' => 'Gösterilen görselin öncesinde ve sonrasındaki kaç resim önyükleme yapılsın?',
        'validationMessage' => 'Geçersiz format'
    ],
    'mode' => [
        'title' => 'Geçiş Efekti',
        'description' => 'Görüntüler arasında geçiş efekti',
        'optionsslide' => 'Slayt',
        'optionsfade' => 'Karartmalı'
    ],
    'speed' => [
        'title' => 'Geçiş Hızı',
        'description' => 'Geçiş süresi (milisaniye)',
        'validationMessage' => 'Geçersiz format'
    ],
    'loop' => [
        'title' => 'Döngü',
        'description' => 'İlk/son resimde galerinin diğer ucuna gitmeye izin verir',
        'optionstrue' => 'Evet',
        'optionsfalse' => 'Hayır'
    ],
    'auto' => [
        'title' => 'Otomatik Geçiş',
        'description' => 'Otomatik slayt geçişini başlatır',
        'optionstrue' => 'Evet',
        'optionsfalse' => 'Hayır'
    ],
    'pause' => [
        'title' => 'Bekleme Zamanı',
        'description' => 'Slayt gösterisi modunda geçişler arasındaki gecikme (milisaniye)',
        'validationMessage' => 'Geçersiz format'
    ],
    'escKey' => [
        'title' => 'ESC Tuşu İle Çıkış',
        'description' => 'Kullanıcı "Esc" tuşuna bastığında galeri kapansın mı?',
        'optionstrue' => 'Evet',
        'optionsfalse' => 'Hayır'
    ],
    'height' => [
        'title' => 'Küçük Görsel Yükseklik',
        'description' => 'Pixel olarak küçük resim yüksekliği',
        'validationMessage' => 'Geçersiz format'
    ],
    'width' => [
        'title' => 'Küçük Görsel Genişlik',
        'description' => 'Pixel olarak küçük resim genişliği',
        'validationMessage' => 'Geçersiz format'
    ],
    'resizer' => [
        'title' => 'Boyutlandırma Modu',
        'description' => 'Küçük resimler nasıl yeniden boyutlandırılsın?',
        'optionsauto' => 'Otomatik',
        'optionsexact' => 'Olduğu Gibi',
        'optionsportrait' => 'Portre',
        'optionslandscape' => 'Yatay',
        'optionscrop' => 'Kırp'
    ],
];
