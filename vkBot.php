<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'Src/VkBot.php';

$Parser = new VkBot;
$Parser->run();

array (
    'response' => 
    array (
      'count' => 13,
      'items' => 
      array (
        0 => 
        array (
          'id' => 13,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1637240813,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => 'let\'s test',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'photo',
              'photo' => 
              array (
                'album_id' => -7,
                'date' => 1637240813,
                'id' => 457239030,
                'owner_id' => -150625730,
                'has_tags' => false,
                'access_key' => 'de9b863a280dce5730',
                'sizes' => 
                array (
                  0 => 
                  array (
                    'height' => 130,
                    'url' => 'https://sun9-58.userapi.com/impg/TDutQwfWunW6d3s8qc41YqCVVVrhY4bjjV59tg/7lIR95WlZIA.jpg?size=73x130&quality=96&sign=078b7c5b3ebadc9a12d094ebd583825c&c_uniq_tag=H8Ko9zzHClBwF42HEtzfVF-mJzQgUhGhfonq8WwID6U&type=album',
                    'type' => 'm',
                    'width' => 73,
                  ),
                  1 => 
                  array (
                    'height' => 231,
                    'url' => 'https://sun9-58.userapi.com/impg/TDutQwfWunW6d3s8qc41YqCVVVrhY4bjjV59tg/7lIR95WlZIA.jpg?size=130x231&quality=96&sign=9a548ad67dec2711a578f4d13913da07&c_uniq_tag=ZuvkvB4jGow3j7mDLmKrkIRmw4MMC67codadCTomigw&type=album',
                    'type' => 'o',
                    'width' => 130,
                  ),
                  2 => 
                  array (
                    'height' => 355,
                    'url' => 'https://sun9-58.userapi.com/impg/TDutQwfWunW6d3s8qc41YqCVVVrhY4bjjV59tg/7lIR95WlZIA.jpg?size=200x356&quality=96&sign=0eaf820600d71c5ab10fe7c4f02e66ef&c_uniq_tag=SLWG-H0zCRvV5Sabfnf-v4H5XChXzKAQHtjD1497zIw&type=album',
                    'type' => 'p',
                    'width' => 200,
                  ),
                  3 => 
                  array (
                    'height' => 569,
                    'url' => 'https://sun9-58.userapi.com/impg/TDutQwfWunW6d3s8qc41YqCVVVrhY4bjjV59tg/7lIR95WlZIA.jpg?size=320x569&quality=96&sign=f1bbf4d67fe0ebc64bea1f0c9e6220ab&c_uniq_tag=hm3CyK659lHpmIq4sJcnOobxWYV4FVkivJ7wGr2v9q0&type=album',
                    'type' => 'q',
                    'width' => 320,
                  ),
                  4 => 
                  array (
                    'height' => 900,
                    'url' => 'https://sun9-58.userapi.com/impg/TDutQwfWunW6d3s8qc41YqCVVVrhY4bjjV59tg/7lIR95WlZIA.jpg?size=510x900&quality=96&crop=0,0,1080,1906&sign=b21b5cc4a0d5430a96e594b98aa2b5c6&c_uniq_tag=NnEbYP2sBi-New3bNEM0BWbClmxX84fWO2YR43EpOR0&type=album',
                    'type' => 'r',
                    'width' => 510,
                  ),
                  5 => 
                  array (
                    'height' => 75,
                    'url' => 'https://sun9-58.userapi.com/impg/TDutQwfWunW6d3s8qc41YqCVVVrhY4bjjV59tg/7lIR95WlZIA.jpg?size=42x75&quality=96&sign=cb3fc376c8eaeb9ef80d89782ee96fd0&c_uniq_tag=vnnS3FAhqBgAXpQgiV9V47ngLfpRL9rsbBlizGkkhzE&type=album',
                    'type' => 's',
                    'width' => 42,
                  ),
                  6 => 
                  array (
                    'height' => 1920,
                    'url' => 'https://sun9-58.userapi.com/impg/TDutQwfWunW6d3s8qc41YqCVVVrhY4bjjV59tg/7lIR95WlZIA.jpg?size=1080x1920&quality=96&sign=7d9bd94ac42d6b6aee48b9d5cb856f63&c_uniq_tag=kWaYOnAq5REcbDbHO4PR-YS5guHZopPBdgqrY4WTVvk&type=album',
                    'type' => 'w',
                    'width' => 1080,
                  ),
                  7 => 
                  array (
                    'height' => 604,
                    'url' => 'https://sun9-58.userapi.com/impg/TDutQwfWunW6d3s8qc41YqCVVVrhY4bjjV59tg/7lIR95WlZIA.jpg?size=340x604&quality=96&sign=90d592584ce0be07a87b0eb347c15f13&c_uniq_tag=6Qi-DedQ4p8rK1-1YNrEKMKqvHng2nAuhp7m_BpMQHo&type=album',
                    'type' => 'x',
                    'width' => 340,
                  ),
                  8 => 
                  array (
                    'height' => 807,
                    'url' => 'https://sun9-58.userapi.com/impg/TDutQwfWunW6d3s8qc41YqCVVVrhY4bjjV59tg/7lIR95WlZIA.jpg?size=454x807&quality=96&sign=ee3ebc8c6d1758a159538f6834feb6cd&c_uniq_tag=fgii0BVZ5KZBRrrg2b2Ke1UvVM8_Og71722GYUeBU8o&type=album',
                    'type' => 'y',
                    'width' => 454,
                  ),
                  9 => 
                  array (
                    'height' => 1080,
                    'url' => 'https://sun9-58.userapi.com/impg/TDutQwfWunW6d3s8qc41YqCVVVrhY4bjjV59tg/7lIR95WlZIA.jpg?size=607x1080&quality=96&sign=59e3283179abbdec14e51320a475344b&c_uniq_tag=YhvbEo1sVSWmBD-cD7ZI3rqoHHHJ4f8Kbsv-SC_necc&type=album',
                    'type' => 'z',
                    'width' => 607,
                  ),
                ),
                'text' => '',
                'user_id' => 100,
              ),
            ),
            1 => 
            array (
              'type' => 'photo',
              'photo' => 
              array (
                'album_id' => -7,
                'date' => 1637240813,
                'id' => 457239031,
                'owner_id' => -150625730,
                'has_tags' => false,
                'access_key' => '97bee8b3fdc17ccb71',
                'lat' => 60.028350000000003,
                'long' => 30.338173999999999,
                'sizes' => 
                array (
                  0 => 
                  array (
                    'height' => 130,
                    'url' => 'https://sun9-41.userapi.com/impg/YQFNvO8tQLzyzoRlJHUgYFpc95oNN3v3VRWI2w/u-AW6Zg0O8w.jpg?size=97x130&quality=96&sign=865ac1ae3e824f185701d630c6a488aa&c_uniq_tag=QB9cUU6iH1zkAZ3ddXZQTDeYmTCOw1Vx12vXHJJp2AE&type=album',
                    'type' => 'm',
                    'width' => 97,
                  ),
                  1 => 
                  array (
                    'height' => 173,
                    'url' => 'https://sun9-41.userapi.com/impg/YQFNvO8tQLzyzoRlJHUgYFpc95oNN3v3VRWI2w/u-AW6Zg0O8w.jpg?size=130x173&quality=96&sign=ac99306d7ef331cfb960b3ea3f61da78&c_uniq_tag=uEDMxKackGF6OrbNsQ5R1Y64g3Q4AbEMuND5oib4OZQ&type=album',
                    'type' => 'o',
                    'width' => 130,
                  ),
                  2 => 
                  array (
                    'height' => 267,
                    'url' => 'https://sun9-41.userapi.com/impg/YQFNvO8tQLzyzoRlJHUgYFpc95oNN3v3VRWI2w/u-AW6Zg0O8w.jpg?size=200x267&quality=96&sign=38e018531cd89cbba4cf04003adeea39&c_uniq_tag=sF5RBf9elA0HFyXURo2SqNyUK6AFTOmo-dD3Gx-Gncw&type=album',
                    'type' => 'p',
                    'width' => 200,
                  ),
                  3 => 
                  array (
                    'height' => 427,
                    'url' => 'https://sun9-41.userapi.com/impg/YQFNvO8tQLzyzoRlJHUgYFpc95oNN3v3VRWI2w/u-AW6Zg0O8w.jpg?size=320x427&quality=96&sign=39ee929a6a79b641ee1532e5a08c37ef&c_uniq_tag=7n9r0mi-jmJeRfrWG-_ZIrQ91vWd4QNTBJ0LGQNF2n8&type=album',
                    'type' => 'q',
                    'width' => 320,
                  ),
                  4 => 
                  array (
                    'height' => 680,
                    'url' => 'https://sun9-41.userapi.com/impg/YQFNvO8tQLzyzoRlJHUgYFpc95oNN3v3VRWI2w/u-AW6Zg0O8w.jpg?size=510x680&quality=96&sign=39ec107d5986dd0de5bb59c9f09dff47&c_uniq_tag=wHTQe_-syntQlls1-Nq1E5Cn7WP-fSBYjtSYXeYfpPE&type=album',
                    'type' => 'r',
                    'width' => 510,
                  ),
                  5 => 
                  array (
                    'height' => 75,
                    'url' => 'https://sun9-41.userapi.com/impg/YQFNvO8tQLzyzoRlJHUgYFpc95oNN3v3VRWI2w/u-AW6Zg0O8w.jpg?size=56x75&quality=96&sign=e466abf4d11b2722154acd79adee9aad&c_uniq_tag=Q1NX2eHRrDYuAnUcbq1ZgoSxzxOn4VVasPYcdBFToEg&type=album',
                    'type' => 's',
                    'width' => 56,
                  ),
                  6 => 
                  array (
                    'height' => 2160,
                    'url' => 'https://sun9-41.userapi.com/impg/YQFNvO8tQLzyzoRlJHUgYFpc95oNN3v3VRWI2w/u-AW6Zg0O8w.jpg?size=1620x2160&quality=96&sign=16b066166b9dc161c48d6e28b0d9046d&c_uniq_tag=5DVD2g1cUvZOB3avjwhkhadZ77m8enL9P5GQ3OwgoW8&type=album',
                    'type' => 'w',
                    'width' => 1620,
                  ),
                  7 => 
                  array (
                    'height' => 604,
                    'url' => 'https://sun9-41.userapi.com/impg/YQFNvO8tQLzyzoRlJHUgYFpc95oNN3v3VRWI2w/u-AW6Zg0O8w.jpg?size=453x604&quality=96&sign=6b34f07a434c5bfe39dfe2698fde4237&c_uniq_tag=MCbg75JMMKP_hDXqTQTLBT3zc-CW6ZHmKFuCCkkdObA&type=album',
                    'type' => 'x',
                    'width' => 453,
                  ),
                  8 => 
                  array (
                    'height' => 807,
                    'url' => 'https://sun9-41.userapi.com/impg/YQFNvO8tQLzyzoRlJHUgYFpc95oNN3v3VRWI2w/u-AW6Zg0O8w.jpg?size=605x807&quality=96&sign=b80ad06dacb22d5e6ad2fcf751a47e33&c_uniq_tag=1Jf8oreyqdgEBeAvJzLpudjvwNR0mo5uMn_U4C3tHnI&type=album',
                    'type' => 'y',
                    'width' => 605,
                  ),
                  9 => 
                  array (
                    'height' => 1080,
                    'url' => 'https://sun9-41.userapi.com/impg/YQFNvO8tQLzyzoRlJHUgYFpc95oNN3v3VRWI2w/u-AW6Zg0O8w.jpg?size=810x1080&quality=96&sign=a397968914b9e9b710370b6ef95bb787&c_uniq_tag=-gmBF1PsPSZj0Jr4xpZaAv1Affl-4ZwXCNBpN88B2_E&type=album',
                    'type' => 'z',
                    'width' => 810,
                  ),
                ),
                'text' => '',
                'user_id' => 100,
              ),
            ),
          ),
          'post_source' => 
          array (
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 1,
          ),
          'hash' => 'IJyF6p5EPttqVVs_yOToYUD03YHp',
        ),
        1 => 
        array (
          'id' => 12,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1536697105,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => 'Эта песня, её текст, он напоминает мне о тебе. Ты моё окружение))',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'video',
              'video' => 
              array (
                'access_key' => 'ce4b024bebf2f34ce0',
                'can_comment' => 0,
                'can_like' => 0,
                'can_repost' => 0,
                'can_subscribe' => 0,
                'can_add_to_faves' => 0,
                'can_add' => 0,
                'date' => 1536697105,
                'description' => 'twenty one pilots\' music video for \'Holding On To You\' from the album, Vessel - available now on Fueled By Ramen.
  
  Download the album: http://smarturl.it/vessel
  
  find twenty one pilots on…
  
  Site: http://twentyonepilots.com
  Facebook: http://facebook.com/twentyonepilots
  Instagram: http://instagr.am/twentyonepilots
  Twitter: http://twitter.com/twentyonepilots
  YouTube: http://youtube.com/twentyonepilots
  Tumblr: http://twentyonepilots.tumblr.com
  
  Directed by Jordan Bahat
  
  LYRICS
  
  I\'m taking over my body, back in',
                'duration' => 268,
                'photo_130' => 'https://sun9-72.userapi.com/c625817/u122559371/video/s_05c7a498.jpg',
                'photo_320' => 'https://sun9-23.userapi.com/c625817/u122559371/video/l_6eee1cba.jpg',
                'photo_640' => 'https://sun9-22.userapi.com/c625817/u122559371/video/y_c583f8a1.jpg',
                'id' => 456239017,
                'owner_id' => -150625730,
                'title' => 'twenty one pilots: Holding On To You [OFFICIAL VIDEO]',
                'track_code' => 'video_0741dc5284w0fGpMOc6pzPpxPWssZFAqi-07VQAMJa3NdHNx8rvBrit4aE8_o63JyUFiXxlSYhmy3QpiBHs',
                'views' => 1,
                'platform' => 'YouTube',
              ),
            ),
          ),
          'post_source' => 
          array (
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 11,
          ),
          'hash' => 'zNhqECLuWkJzJH0F9NZeUNaY14hG',
        ),
        2 => 
        array (
          'id' => 11,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1532627307,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => '',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'link',
              'link' => 
              array (
                'url' => 'https://auto.ru/catalog/cars/ford/probe/20292585/20293049/?autoru_body_type=coupe&autoru_body_type=coupe_hardtop&autoru_body_type=sedan_2_doors&autoru_body_type=hatchback_3_doors&autoru_body_type=liftback&autoru_body_type=pickup&autoru_body_type=pickup_two&autoru_body_type=pickup_one&autoru_body_type=pickup_one_half&price_to=200000',
                'title' => 'Ford Probe I на Авто.ру',
                'caption' => 'auto.ru',
                'description' => 'Ford Probe I, купе: объявления, фотографии, характеристики, цены, отзывы на Авто.ру',
                'photo' => 
                array (
                  'album_id' => -2,
                  'date' => 1532627307,
                  'id' => 456242487,
                  'owner_id' => 100,
                  'has_tags' => false,
                  'sizes' => 
                  array (
                    0 => 
                    array (
                      'height' => 480,
                      'url' => 'https://sun9-62.userapi.com/c824601/v824601595/1973f9/c5eZcI48UXM.jpg',
                      'type' => 'k',
                      'width' => 1024,
                    ),
                    1 => 
                    array (
                      'height' => 240,
                      'url' => 'https://sun9-52.userapi.com/c824601/v824601595/1973f8/av-miKMKScA.jpg',
                      'type' => 'l',
                      'width' => 537,
                    ),
                    2 => 
                    array (
                      'height' => 98,
                      'url' => 'https://sun9-70.userapi.com/c824601/v824601595/1973f5/P3SW9puoSfQ.jpg',
                      'type' => 'm',
                      'width' => 130,
                    ),
                    3 => 
                    array (
                      'height' => 195,
                      'url' => 'https://sun9-9.userapi.com/c824601/v824601595/1973f7/2Eya1SlwjvQ.jpg',
                      'type' => 'p',
                      'width' => 260,
                    ),
                    4 => 
                    array (
                      'height' => 56,
                      'url' => 'https://sun9-69.userapi.com/c824601/v824601595/1973f4/Vx1zdVKMEpY.jpg',
                      'type' => 's',
                      'width' => 75,
                    ),
                    5 => 
                    array (
                      'height' => 113,
                      'url' => 'https://sun9-27.userapi.com/c824601/v824601595/1973f6/YYY-yktT6i8.jpg',
                      'type' => 'x',
                      'width' => 150,
                    ),
                  ),
                  'text' => '',
                  'user_id' => 100,
                ),
              ),
            ),
          ),
          'post_source' => 
          array (
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 7,
          ),
          'hash' => 'nOtOBzRciF1jb7eRevN5EmS5SbUN',
        ),
        3 => 
        array (
          'id' => 10,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1532627210,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => '',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'link',
              'link' => 
              array (
                'url' => 'https://auto.ru/catalog/cars/ford/cougar/4994994/4994995/?autoru_body_type=coupe&autoru_body_type=coupe_hardtop&autoru_body_type=sedan_2_doors&autoru_body_type=hatchback_3_doors&autoru_body_type=liftback&autoru_body_type=pickup&autoru_body_type=pickup_two&autoru_body_type=pickup_one&autoru_body_type=pickup_one_half&price_to=200000',
                'title' => 'Ford Cougar на Авто.ру',
                'caption' => 'auto.ru',
                'description' => 'Ford Cougar, купе: объявления, фотографии, характеристики, цены, отзывы на Авто.ру',
                'photo' => 
                array (
                  'album_id' => -2,
                  'date' => 1532627210,
                  'id' => 456242486,
                  'owner_id' => 100,
                  'has_tags' => false,
                  'sizes' => 
                  array (
                    0 => 
                    array (
                      'height' => 480,
                      'url' => 'https://sun9-64.userapi.com/c850036/v850036595/378ae/o42jP3wUHfU.jpg',
                      'type' => 'k',
                      'width' => 1024,
                    ),
                    1 => 
                    array (
                      'height' => 240,
                      'url' => 'https://sun9-47.userapi.com/c850036/v850036595/378ad/RdHl-gi80Bs.jpg',
                      'type' => 'l',
                      'width' => 537,
                    ),
                    2 => 
                    array (
                      'height' => 98,
                      'url' => 'https://sun9-61.userapi.com/c850036/v850036595/378aa/iYDOCwb-k0w.jpg',
                      'type' => 'm',
                      'width' => 130,
                    ),
                    3 => 
                    array (
                      'height' => 195,
                      'url' => 'https://sun9-35.userapi.com/c850036/v850036595/378ac/aPNId8OV83s.jpg',
                      'type' => 'p',
                      'width' => 260,
                    ),
                    4 => 
                    array (
                      'height' => 56,
                      'url' => 'https://sun9-47.userapi.com/c850036/v850036595/378a9/aoFmHzgfgU8.jpg',
                      'type' => 's',
                      'width' => 75,
                    ),
                    5 => 
                    array (
                      'height' => 113,
                      'url' => 'https://sun9-58.userapi.com/c850036/v850036595/378ab/Ht74H3G9PZc.jpg',
                      'type' => 'x',
                      'width' => 150,
                    ),
                  ),
                  'text' => '',
                  'user_id' => 100,
                ),
              ),
            ),
          ),
          'post_source' => 
          array (
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 12,
          ),
          'hash' => 'FlJwOZZdeMvCgBpdRBwu0sZl_D5d',
        ),
        4 => 
        array (
          'id' => 9,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1529594910,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => 'pontiac grand prix',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'photo',
              'photo' => 
              array (
                'album_id' => -7,
                'date' => 1529594910,
                'id' => 456239026,
                'owner_id' => -150625730,
                'has_tags' => false,
                'access_key' => '32b47a44a6d4ac60d3',
                'post_id' => 9,
                'sizes' => 
                array (
                  0 => 
                  array (
                    'height' => 73,
                    'url' => 'https://sun9-75.userapi.com/impf/iioS1yCKiHDI-MO58XMuvjQDIjjCIfuiCiO6fg/vhqyioO3KAI.jpg?size=130x73&quality=96&sign=a878b0b5b511e4d6f381d57027f911c5&c_uniq_tag=5uOmtxAnFP55v-yD_1rzk4sYrgZOzLgJAunQGDNxSQQ&type=album',
                    'type' => 'm',
                    'width' => 130,
                  ),
                  1 => 
                  array (
                    'height' => 87,
                    'url' => 'https://sun9-75.userapi.com/impf/iioS1yCKiHDI-MO58XMuvjQDIjjCIfuiCiO6fg/vhqyioO3KAI.jpg?size=130x87&quality=96&crop=78,0,823,551&sign=ee76826f07d63a56b046d30867d7414f&c_uniq_tag=TTEiVI6rpLWk9yhcB1DQ57axF5qzK8uGi0ZnPgfQOfg&type=album',
                    'type' => 'o',
                    'width' => 130,
                  ),
                  2 => 
                  array (
                    'height' => 133,
                    'url' => 'https://sun9-75.userapi.com/impf/iioS1yCKiHDI-MO58XMuvjQDIjjCIfuiCiO6fg/vhqyioO3KAI.jpg?size=200x133&quality=96&crop=75,0,829,551&sign=8bf0b027d6020b2488537aeb83a45734&c_uniq_tag=A5CAuFm-aW-6rV7Vx7dO_k863EOtKRUz-7JJ9m_K2bw&type=album',
                    'type' => 'p',
                    'width' => 200,
                  ),
                  3 => 
                  array (
                    'height' => 213,
                    'url' => 'https://sun9-75.userapi.com/impf/iioS1yCKiHDI-MO58XMuvjQDIjjCIfuiCiO6fg/vhqyioO3KAI.jpg?size=320x213&quality=96&crop=76,0,828,551&sign=116234fd1ab44e2a7b3f6d4f2638f1b7&c_uniq_tag=mFwBkBP9B7yp5MthlI7x374QTncZCBT3erUjLJDoANg&type=album',
                    'type' => 'q',
                    'width' => 320,
                  ),
                  4 => 
                  array (
                    'height' => 340,
                    'url' => 'https://sun9-75.userapi.com/impf/iioS1yCKiHDI-MO58XMuvjQDIjjCIfuiCiO6fg/vhqyioO3KAI.jpg?size=510x340&quality=96&crop=77,0,826,551&sign=cdb6badf161be35cd8d784d32a7fa61e&c_uniq_tag=9ErX14cPHUBkikqi7qNbW9gNCmn599h1m5NekGodVfs&type=album',
                    'type' => 'r',
                    'width' => 510,
                  ),
                  5 => 
                  array (
                    'height' => 42,
                    'url' => 'https://sun9-75.userapi.com/impf/iioS1yCKiHDI-MO58XMuvjQDIjjCIfuiCiO6fg/vhqyioO3KAI.jpg?size=75x42&quality=96&sign=cbea526493920b557ecbda10618bf9a8&c_uniq_tag=AzHVeaXSlAdzg3x9MPkvv9GE15ldvLzMW6LZMayOO98&type=album',
                    'type' => 's',
                    'width' => 75,
                  ),
                  6 => 
                  array (
                    'height' => 340,
                    'url' => 'https://sun9-75.userapi.com/impf/iioS1yCKiHDI-MO58XMuvjQDIjjCIfuiCiO6fg/vhqyioO3KAI.jpg?size=604x340&quality=96&sign=beb4e69060c97744aeb1feb8f02b2b40&c_uniq_tag=W00e5KujafF-J_xZi77aMFmgUgROc7JDwsYZzqaFJbo&type=album',
                    'type' => 'x',
                    'width' => 604,
                  ),
                  7 => 
                  array (
                    'height' => 454,
                    'url' => 'https://sun9-75.userapi.com/impf/iioS1yCKiHDI-MO58XMuvjQDIjjCIfuiCiO6fg/vhqyioO3KAI.jpg?size=807x454&quality=96&sign=2f1b5abfe43fb031c4acd16e855fa8ad&c_uniq_tag=7FjgJFnDvBnclcRC7LzoCltrawylnNuntuTd4n_V3cw&type=album',
                    'type' => 'y',
                    'width' => 807,
                  ),
                  8 => 
                  array (
                    'height' => 551,
                    'url' => 'https://sun9-75.userapi.com/impf/iioS1yCKiHDI-MO58XMuvjQDIjjCIfuiCiO6fg/vhqyioO3KAI.jpg?size=980x551&quality=96&sign=97fdfb3419ff93cffc75e027d843c024&c_uniq_tag=9ATFhCqFGpfkNc0pbC3S7oyisAO1mh9yAq9FxljbC7c&type=album',
                    'type' => 'z',
                    'width' => 980,
                  ),
                ),
                'text' => 'Original: https://www.kolesa.ru/uploads/2016/09/IMG_5843-980x0-c-default.jpg',
                'user_id' => 100,
              ),
            ),
          ),
          'post_source' => 
          array (
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 8,
          ),
          'hash' => 'ETkqBQ-PBbMkdbI2LGOhcjfBTyn7',
        ),
        5 => 
        array (
          'id' => 8,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1526392356,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => 'а вот и моя статья',
          'signer_id' => 123184169,
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'link',
              'link' => 
              array (
                'url' => 'https://m.vk.com/@syktyvenglish-poka-pigmalion-nabiraet-oboroty-my-sezdili-v-udivitelnuu-kra',
                'title' => 'Пока Пигмалион набирает обороты мы съездили в удивительную, красочную Грузию! Мы уже приехали, а это значит, что с 16.05 все занятия будут проходить по расписанию!',
                'caption' => 'm.vk.com',
                'description' => 'Статья',
                'photo' => 
                array (
                  'album_id' => 235125454,
                  'date' => 1513935113,
                  'id' => 456239031,
                  'owner_id' => -127435785,
                  'has_tags' => false,
                  'sizes' => 
                  array (
                    0 => 
                    array (
                      'height' => 87,
                      'url' => 'https://sun9-63.userapi.com/impf/c841427/v841427299/49e59/d3TSz4Ej5RQ.jpg?size=130x87&quality=96&sign=576607299c1b81a6caf6dff1f11b8661&c_uniq_tag=euAhj9lkEfeU_RgxNE7lEog3x7OgmSct943XHou0jjc&type=album',
                      'type' => 'm',
                      'width' => 130,
                    ),
                    1 => 
                    array (
                      'height' => 87,
                      'url' => 'https://sun9-63.userapi.com/impf/c841427/v841427299/49e59/d3TSz4Ej5RQ.jpg?size=130x87&quality=96&sign=576607299c1b81a6caf6dff1f11b8661&c_uniq_tag=euAhj9lkEfeU_RgxNE7lEog3x7OgmSct943XHou0jjc&type=album',
                      'type' => 'o',
                      'width' => 130,
                    ),
                    2 => 
                    array (
                      'height' => 133,
                      'url' => 'https://sun9-63.userapi.com/impf/c841427/v841427299/49e59/d3TSz4Ej5RQ.jpg?size=200x133&quality=96&sign=da461e4b5cb271ad34812828ce37a1ef&c_uniq_tag=Q00yWQMFShQbuNLN3xf8AiIQdc3d5-rnnQBVMs5pWaY&type=album',
                      'type' => 'p',
                      'width' => 200,
                    ),
                    3 => 
                    array (
                      'height' => 213,
                      'url' => 'https://sun9-63.userapi.com/impf/c841427/v841427299/49e59/d3TSz4Ej5RQ.jpg?size=320x213&quality=96&sign=237856316ae4d2bdbef9fc3c3dafa38c&c_uniq_tag=qadWcPPz2IBvJEjhjmxyouPJDrajxkJDJSPqHEOI4w0&type=album',
                      'type' => 'q',
                      'width' => 320,
                    ),
                    4 => 
                    array (
                      'height' => 340,
                      'url' => 'https://sun9-63.userapi.com/impf/c841427/v841427299/49e59/d3TSz4Ej5RQ.jpg?size=510x340&quality=96&sign=e0244a460c65394a6962fb0ea3a60ad5&c_uniq_tag=BsF8wrHkpwOhDNGJKuZga3d3griwWoMWG24vD6oK8HE&type=album',
                      'type' => 'r',
                      'width' => 510,
                    ),
                    5 => 
                    array (
                      'height' => 50,
                      'url' => 'https://sun9-63.userapi.com/impf/c841427/v841427299/49e59/d3TSz4Ej5RQ.jpg?size=75x50&quality=96&sign=26526245db1a1b3fe31f38132a92bbf5&c_uniq_tag=_Y0R7FNlMayI-1boPjFEjdk4fBo8LYnNGN36kEU5HfQ&type=album',
                      'type' => 's',
                      'width' => 75,
                    ),
                    6 => 
                    array (
                      'height' => 1023,
                      'url' => 'https://sun9-63.userapi.com/impf/c841427/v841427299/49e59/d3TSz4Ej5RQ.jpg?size=1536x1023&quality=96&sign=580f106db363f2e0293a1f62231b7158&c_uniq_tag=sTKKBLjPxWCg1pvYGW7__UAMSXFBDT7DxRSoIHseWXc&type=album',
                      'type' => 'w',
                      'width' => 1536,
                    ),
                    7 => 
                    array (
                      'height' => 402,
                      'url' => 'https://sun9-63.userapi.com/impf/c841427/v841427299/49e59/d3TSz4Ej5RQ.jpg?size=604x402&quality=96&sign=260d094cbaef4952a35d60750fe89dec&c_uniq_tag=o1kyHP1vwSpv8yuJb0CP2MppVOS-y6flf_Y6meu1MQk&type=album',
                      'type' => 'x',
                      'width' => 604,
                    ),
                    8 => 
                    array (
                      'height' => 537,
                      'url' => 'https://sun9-63.userapi.com/impf/c841427/v841427299/49e59/d3TSz4Ej5RQ.jpg?size=807x537&quality=96&sign=bcc7336bbbdd75d524bb984c42cda17d&c_uniq_tag=5ZF9fUn7h9EZ-uQp1_fwgwI6KHUW6MyQqJxPlWamsjA&type=album',
                      'type' => 'y',
                      'width' => 807,
                    ),
                    9 => 
                    array (
                      'height' => 852,
                      'url' => 'https://sun9-63.userapi.com/impf/c841427/v841427299/49e59/d3TSz4Ej5RQ.jpg?size=1280x852&quality=96&sign=6cc59b8edb9c867c9472ed7abdf62680&c_uniq_tag=TKnIONZDu9HnaWhkjZYotoxtWVqsoXP9KW3h2k0ecBs&type=album',
                      'type' => 'z',
                      'width' => 1280,
                    ),
                  ),
                  'text' => '',
                  'user_id' => 100,
                ),
              ),
            ),
          ),
          'post_source' => 
          array (
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 7,
          ),
          'hash' => '68mJNUnf2ytQ9EttKe8NTRKRYZxz',
        ),
        6 => 
        array (
          'id' => 7,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1524174866,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => '',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'photo',
              'photo' => 
              array (
                'album_id' => -6,
                'date' => 1524174866,
                'id' => 456239024,
                'owner_id' => -150625730,
                'has_tags' => false,
                'post_id' => 7,
                'sizes' => 
                array (
                  0 => 
                  array (
                    'height' => 130,
                    'url' => 'https://sun9-23.userapi.com/impf/c623900/v623900545/10e803/h5NAtMCVNt0.jpg?size=92x130&quality=96&sign=08012b5df4577c54672cf275be67545d&c_uniq_tag=ZloUDDfW3AJV8oyWD_x7-1gb31ctjHCgiUfTJ5qaKi8&type=album',
                    'type' => 'm',
                    'width' => 92,
                  ),
                  1 => 
                  array (
                    'height' => 183,
                    'url' => 'https://sun9-23.userapi.com/impf/c623900/v623900545/10e803/h5NAtMCVNt0.jpg?size=130x183&quality=96&sign=4589fede035e45c651579cfd3af100e6&c_uniq_tag=zaKh8hoFibZXFboKUfNTfsK_4HpqxyRC_kEWVKGd2Zw&type=album',
                    'type' => 'o',
                    'width' => 130,
                  ),
                  2 => 
                  array (
                    'height' => 282,
                    'url' => 'https://sun9-23.userapi.com/impf/c623900/v623900545/10e803/h5NAtMCVNt0.jpg?size=200x282&quality=96&sign=2d5444ed9e91448e31f1dbd34775f8ef&c_uniq_tag=-NRnBlaj-Hea9TRPp_BUtv8ODk477A6lvHJ0VgxRpw4&type=album',
                    'type' => 'p',
                    'width' => 200,
                  ),
                  3 => 
                  array (
                    'height' => 451,
                    'url' => 'https://sun9-23.userapi.com/impf/c623900/v623900545/10e803/h5NAtMCVNt0.jpg?size=320x451&quality=96&sign=0e1a10413b2ae72a3ee4fbef96533b2e&c_uniq_tag=qQa5O4ayYudDWLM6LGeyHlkef6wTEg5ATizRvRrW77Y&type=album',
                    'type' => 'q',
                    'width' => 320,
                  ),
                  4 => 
                  array (
                    'height' => 719,
                    'url' => 'https://sun9-23.userapi.com/impf/c623900/v623900545/10e803/h5NAtMCVNt0.jpg?size=510x719&quality=96&sign=aab25bd282bebf9b115a3386b3cb57b1&c_uniq_tag=psh1Qjn0A0D1zNsADw3wv5L3qUpyA7PNFpiw7oFBSr0&type=album',
                    'type' => 'r',
                    'width' => 510,
                  ),
                  5 => 
                  array (
                    'height' => 75,
                    'url' => 'https://sun9-23.userapi.com/impf/c623900/v623900545/10e803/h5NAtMCVNt0.jpg?size=53x75&quality=96&sign=b67ce61072d8e3100c79c3b0fa4f5841&c_uniq_tag=LYToL0G4Kn4y3XXZnSVEX-u8bZx4X1Y6kMIRMhOpxLU&type=album',
                    'type' => 's',
                    'width' => 53,
                  ),
                  6 => 
                  array (
                    'height' => 1748,
                    'url' => 'https://sun9-23.userapi.com/impf/c623900/v623900545/10e803/h5NAtMCVNt0.jpg?size=1240x1748&quality=96&sign=9e597d23a0007a9d2fa3de3f9d91b448&c_uniq_tag=LskI0L_zA0qyN-eJx-27feI-EziQVtDd9jwc829N0rc&type=album',
                    'type' => 'w',
                    'width' => 1240,
                  ),
                  7 => 
                  array (
                    'height' => 604,
                    'url' => 'https://sun9-23.userapi.com/impf/c623900/v623900545/10e803/h5NAtMCVNt0.jpg?size=428x604&quality=96&sign=5caebe0cbdab60826d40da33b0d41dae&c_uniq_tag=gJzgI2Bd4aHZEbksM1c423vuZSK3ee2KQ-xtxx_S26I&type=album',
                    'type' => 'x',
                    'width' => 428,
                  ),
                  8 => 
                  array (
                    'height' => 807,
                    'url' => 'https://sun9-23.userapi.com/impf/c623900/v623900545/10e803/h5NAtMCVNt0.jpg?size=572x807&quality=96&sign=ea643396edb9383a70de1dded7b815f2&c_uniq_tag=PC1jsUZ4kVxdv4pS8-TR7r49xAY4UPIUr53RqcT9NXU&type=album',
                    'type' => 'y',
                    'width' => 572,
                  ),
                  9 => 
                  array (
                    'height' => 1080,
                    'url' => 'https://sun9-23.userapi.com/impf/c623900/v623900545/10e803/h5NAtMCVNt0.jpg?size=766x1080&quality=96&sign=618b6064a4bbd12982d808cc866e4635&c_uniq_tag=P8UiXOlz871bo0SPE7m8tVbegb7xbReOSauqixoDX2Y&type=album',
                    'type' => 'z',
                    'width' => 766,
                  ),
                ),
                'text' => '',
                'user_id' => 100,
              ),
            ),
          ),
          'post_source' => 
          array (
            'data' => 'profile_photo',
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 7,
          ),
          'hash' => 'oPRKX_mtmPfSJ5OYaHHxAf4AD_HO',
        ),
        7 => 
        array (
          'id' => 6,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1524174630,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => '',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'photo',
              'photo' => 
              array (
                'album_id' => -6,
                'date' => 1524174630,
                'id' => 456239023,
                'owner_id' => -150625730,
                'has_tags' => false,
                'post_id' => 6,
                'sizes' => 
                array (
                  0 => 
                  array (
                    'height' => 130,
                    'url' => 'https://sun9-82.userapi.com/impf/c846420/v846420545/2c77d/caToJ8L0XcU.jpg?size=52x130&quality=96&sign=ee83d320a0ece58b885526ffbabdac71&c_uniq_tag=lCKasEs4Ex3YB8ZYxaSUK6tWfxCOgv8Ql9w5YUC-cNU&type=album',
                    'type' => 'm',
                    'width' => 52,
                  ),
                  1 => 
                  array (
                    'height' => 324,
                    'url' => 'https://sun9-82.userapi.com/impf/c846420/v846420545/2c77d/caToJ8L0XcU.jpg?size=130x325&quality=96&sign=3c899f7443a90ff850e77d67df88cecb&c_uniq_tag=x5PIhiHz53LjAwYwbVzuZJFTu6gHQaXq3xaal3uRGGQ&type=album',
                    'type' => 'o',
                    'width' => 130,
                  ),
                  2 => 
                  array (
                    'height' => 499,
                    'url' => 'https://sun9-82.userapi.com/impf/c846420/v846420545/2c77d/caToJ8L0XcU.jpg?size=200x500&quality=96&sign=467da940df72e002d54552406d65d075&c_uniq_tag=4mK4r05LyYcYfLQYt7xSueRjWvD_s3njLdJu6Z1vNCc&type=album',
                    'type' => 'p',
                    'width' => 200,
                  ),
                  3 => 
                  array (
                    'height' => 800,
                    'url' => 'https://sun9-82.userapi.com/impf/c846420/v846420545/2c77d/caToJ8L0XcU.jpg?size=320x800&quality=96&sign=67516ffa61fbac37d4fd6f084354f5db&c_uniq_tag=tPjDyVUmKOp6Y7oQqPSeaFO_i9rpwu41tOs4rVuMtUo&type=album',
                    'type' => 'q',
                    'width' => 320,
                  ),
                  4 => 
                  array (
                    'height' => 900,
                    'url' => 'https://sun9-82.userapi.com/impf/c846420/v846420545/2c77d/caToJ8L0XcU.jpg?size=510x900&quality=96&crop=0,0,864,1525&sign=12b9cec872b89c0db890b1d7db8dc7f4&c_uniq_tag=I0LwehAflKc_I2vuuoXryv6r03qt9L8ikxBjpHeH1W4&type=album',
                    'type' => 'r',
                    'width' => 510,
                  ),
                  5 => 
                  array (
                    'height' => 75,
                    'url' => 'https://sun9-82.userapi.com/impf/c846420/v846420545/2c77d/caToJ8L0XcU.jpg?size=30x75&quality=96&sign=17f0f2ab4f0878e2afbdea74ddfc3b3d&c_uniq_tag=ecMotUYGEUT9sk_yvM8S1ZkoNjle9ovcrQ5A8pKeUiA&type=album',
                    'type' => 's',
                    'width' => 30,
                  ),
                  6 => 
                  array (
                    'height' => 2160,
                    'url' => 'https://sun9-82.userapi.com/impf/c846420/v846420545/2c77d/caToJ8L0XcU.jpg?size=864x2160&quality=96&sign=94d72ad2a68584d678873e78f5019208&c_uniq_tag=fYvOgEiWj8ngQPLJ9DzYUX2fVQV1SppyWY0Ui1ivbL8&type=album',
                    'type' => 'w',
                    'width' => 864,
                  ),
                  7 => 
                  array (
                    'height' => 604,
                    'url' => 'https://sun9-82.userapi.com/impf/c846420/v846420545/2c77d/caToJ8L0XcU.jpg?size=242x604&quality=96&sign=fac6aa69f63517bbbcdc389a807f31ad&c_uniq_tag=mBt0T65eEPEqrJXElX-ZtaxnKGi1imY8Y9DWgYrX4T0&type=album',
                    'type' => 'x',
                    'width' => 242,
                  ),
                  8 => 
                  array (
                    'height' => 807,
                    'url' => 'https://sun9-82.userapi.com/impf/c846420/v846420545/2c77d/caToJ8L0XcU.jpg?size=323x807&quality=96&sign=4828d4ae7cde718b78468dbab1e084e0&c_uniq_tag=_h49ULT8V6dD_orxluaJGHbAusaKHHeeJTpaff5j5Lk&type=album',
                    'type' => 'y',
                    'width' => 323,
                  ),
                  9 => 
                  array (
                    'height' => 1080,
                    'url' => 'https://sun9-82.userapi.com/impf/c846420/v846420545/2c77d/caToJ8L0XcU.jpg?size=432x1080&quality=96&sign=23d148de42a0ecded35bb331367279c5&c_uniq_tag=j1rvxHxINA3nIVwfv4G_2WexWU8iAi2FyX3G-_AiDSQ&type=album',
                    'type' => 'z',
                    'width' => 432,
                  ),
                ),
                'text' => '',
                'user_id' => 100,
              ),
            ),
          ),
          'post_source' => 
          array (
            'data' => 'profile_photo',
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 5,
          ),
          'hash' => 'lXdfgF2Y5TM1hY7a3q79sdictgbx',
        ),
        8 => 
        array (
          'id' => 5,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1524174444,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => '',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'photo',
              'photo' => 
              array (
                'album_id' => -6,
                'date' => 1524174444,
                'id' => 456239022,
                'owner_id' => -150625730,
                'has_tags' => false,
                'post_id' => 5,
                'sizes' => 
                array (
                  0 => 
                  array (
                    'height' => 130,
                    'url' => 'https://sun9-38.userapi.com/impf/c621515/v621515545/8b17b/mn4AqjUdHIo.jpg?size=52x130&quality=96&sign=782d7a0b7187c16315f79d71f4f803d6&c_uniq_tag=U-wtnYoYuTO2N3PBQySKjTZI47YtL0558aq77Vbu6es&type=album',
                    'type' => 'm',
                    'width' => 52,
                  ),
                  1 => 
                  array (
                    'height' => 324,
                    'url' => 'https://sun9-38.userapi.com/impf/c621515/v621515545/8b17b/mn4AqjUdHIo.jpg?size=130x325&quality=96&sign=051fceff2454e59520ff0f7d6116ac59&c_uniq_tag=TEKwuNHi-2qRYk-auxyX5uKTFqWLlg0mPNb58ktdFiI&type=album',
                    'type' => 'o',
                    'width' => 130,
                  ),
                  2 => 
                  array (
                    'height' => 499,
                    'url' => 'https://sun9-38.userapi.com/impf/c621515/v621515545/8b17b/mn4AqjUdHIo.jpg?size=200x500&quality=96&sign=67324c8d02ed0d3ac2108c8405fec012&c_uniq_tag=KaWZbRi_8KmIWagWD6F9qHgtkdZpOnyEI2w62gNO-4I&type=album',
                    'type' => 'p',
                    'width' => 200,
                  ),
                  3 => 
                  array (
                    'height' => 800,
                    'url' => 'https://sun9-38.userapi.com/impf/c621515/v621515545/8b17b/mn4AqjUdHIo.jpg?size=320x800&quality=96&sign=17a7c9d57ced9d028810461625cd9220&c_uniq_tag=uTiiw4qsw4OLypxMhpEU0Ii-Q1hD79ahHpz9Hmpenqo&type=album',
                    'type' => 'q',
                    'width' => 320,
                  ),
                  4 => 
                  array (
                    'height' => 900,
                    'url' => 'https://sun9-38.userapi.com/impf/c621515/v621515545/8b17b/mn4AqjUdHIo.jpg?size=510x900&quality=96&crop=0,0,864,1525&sign=6a64bd571ffc8e5821956e2a6adb0760&c_uniq_tag=kUiWjY22KLXDwabB6Xj5nlWpIbRF6xgfONbb3WvpowM&type=album',
                    'type' => 'r',
                    'width' => 510,
                  ),
                  5 => 
                  array (
                    'height' => 75,
                    'url' => 'https://sun9-38.userapi.com/impf/c621515/v621515545/8b17b/mn4AqjUdHIo.jpg?size=30x75&quality=96&sign=44f0b1998e7e74f94981077f1ecc0a91&c_uniq_tag=5z3kxf6OsupPcqaLxaGQvF8JIU6e9lwR1OqyO6TDb8I&type=album',
                    'type' => 's',
                    'width' => 30,
                  ),
                  6 => 
                  array (
                    'height' => 2160,
                    'url' => 'https://sun9-38.userapi.com/impf/c621515/v621515545/8b17b/mn4AqjUdHIo.jpg?size=864x2160&quality=96&sign=4db7eb9b81cfe0c49857ed1592b3a625&c_uniq_tag=K-6P_3dZ1W5NumA5S15oDx7KW4_OafpSqmmp-pIwDA0&type=album',
                    'type' => 'w',
                    'width' => 864,
                  ),
                  7 => 
                  array (
                    'height' => 604,
                    'url' => 'https://sun9-38.userapi.com/impf/c621515/v621515545/8b17b/mn4AqjUdHIo.jpg?size=242x604&quality=96&sign=63060044c87d785b13898d93df567af5&c_uniq_tag=0qAItndn3sJIcx4a5r2LBUCT0ZSCE6ArcqYnnAaQpp4&type=album',
                    'type' => 'x',
                    'width' => 242,
                  ),
                  8 => 
                  array (
                    'height' => 807,
                    'url' => 'https://sun9-38.userapi.com/impf/c621515/v621515545/8b17b/mn4AqjUdHIo.jpg?size=323x807&quality=96&sign=f2cafb7d53e23b4057ed19c87bc0be3d&c_uniq_tag=xcDvjMy5n0RfkTbqcuxRjntJQz2bd9q1yhN2YoI0p7g&type=album',
                    'type' => 'y',
                    'width' => 323,
                  ),
                  9 => 
                  array (
                    'height' => 1080,
                    'url' => 'https://sun9-38.userapi.com/impf/c621515/v621515545/8b17b/mn4AqjUdHIo.jpg?size=432x1080&quality=96&sign=1bdb8836e7d44d121e8c0ae6a52e59cd&c_uniq_tag=st6StraYoY1beCt8-7CB5Dj5paikUlnXouOsxJ8G5xY&type=album',
                    'type' => 'z',
                    'width' => 432,
                  ),
                ),
                'text' => '',
                'user_id' => 100,
              ),
            ),
          ),
          'post_source' => 
          array (
            'data' => 'profile_photo',
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 3,
          ),
          'hash' => 'GMmi7eqEk_RK3JQkVI00GhBLZgQJ',
        ),
        9 => 
        array (
          'id' => 4,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1524174240,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => '',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'photo',
              'photo' => 
              array (
                'album_id' => -6,
                'date' => 1524174240,
                'id' => 456239021,
                'owner_id' => -150625730,
                'has_tags' => false,
                'post_id' => 4,
                'sizes' => 
                array (
                  0 => 
                  array (
                    'height' => 130,
                    'url' => 'https://sun9-44.userapi.com/impf/c844521/v844521545/3123a/ev_WUIVpd9k.jpg?size=92x130&quality=96&sign=84ebb389fd2d95629358d9b821448476&c_uniq_tag=MbqBCGBTukFLAkk378FVLA16WV0Je2SoIrxw0FV6-00&type=album',
                    'type' => 'm',
                    'width' => 92,
                  ),
                  1 => 
                  array (
                    'height' => 183,
                    'url' => 'https://sun9-44.userapi.com/impf/c844521/v844521545/3123a/ev_WUIVpd9k.jpg?size=130x183&quality=96&sign=63fe1cf0f13855b9ea625e0ef80ca72d&c_uniq_tag=WubOtozoG6Sbn5vPhH8ZLlzdo_V6Ju5pK7TXhCXCvhg&type=album',
                    'type' => 'o',
                    'width' => 130,
                  ),
                  2 => 
                  array (
                    'height' => 282,
                    'url' => 'https://sun9-44.userapi.com/impf/c844521/v844521545/3123a/ev_WUIVpd9k.jpg?size=200x282&quality=96&sign=e7ecdfe8309ce08b746d9d25e642d489&c_uniq_tag=k-W9X_xkwV0Q0WmRjysh2i8HqNUAvyMCAB2nLfyZEmk&type=album',
                    'type' => 'p',
                    'width' => 200,
                  ),
                  3 => 
                  array (
                    'height' => 451,
                    'url' => 'https://sun9-44.userapi.com/impf/c844521/v844521545/3123a/ev_WUIVpd9k.jpg?size=320x451&quality=96&sign=8f0b62f49b8bd75ecb17e439a8581d32&c_uniq_tag=mH-R9tbao5ErCp1_KiWapfD-VMIGMr5THUCjhhnAxuM&type=album',
                    'type' => 'q',
                    'width' => 320,
                  ),
                  4 => 
                  array (
                    'height' => 719,
                    'url' => 'https://sun9-44.userapi.com/impf/c844521/v844521545/3123a/ev_WUIVpd9k.jpg?size=510x719&quality=96&sign=fad6825137055978d82b1168f608e7a9&c_uniq_tag=ec78We2T_O278KorbJUtrsbGswOrGteQlO2W89FTLvc&type=album',
                    'type' => 'r',
                    'width' => 510,
                  ),
                  5 => 
                  array (
                    'height' => 75,
                    'url' => 'https://sun9-44.userapi.com/impf/c844521/v844521545/3123a/ev_WUIVpd9k.jpg?size=53x75&quality=96&sign=c8a8d2c5ab93e13f9b11a8df51b5be89&c_uniq_tag=REh6Idm8ic8t1WCFSMIAloPlqn0DcJ843F-NR8b29ec&type=album',
                    'type' => 's',
                    'width' => 53,
                  ),
                  6 => 
                  array (
                    'height' => 1748,
                    'url' => 'https://sun9-44.userapi.com/impf/c844521/v844521545/3123a/ev_WUIVpd9k.jpg?size=1240x1748&quality=96&sign=12727cf271ee4f0fc41a4dfa56576829&c_uniq_tag=bUX9ksgCAcGtEDdahD7zA1kHNvjAd7ZdfZJI7gkB1ss&type=album',
                    'type' => 'w',
                    'width' => 1240,
                  ),
                  7 => 
                  array (
                    'height' => 604,
                    'url' => 'https://sun9-44.userapi.com/impf/c844521/v844521545/3123a/ev_WUIVpd9k.jpg?size=428x604&quality=96&sign=9834c059a17779dfdee9534eac51520b&c_uniq_tag=9R74VMhXNCA3bVW4QrIdDjWul8esndKNlrvUV-4_vgs&type=album',
                    'type' => 'x',
                    'width' => 428,
                  ),
                  8 => 
                  array (
                    'height' => 807,
                    'url' => 'https://sun9-44.userapi.com/impf/c844521/v844521545/3123a/ev_WUIVpd9k.jpg?size=572x807&quality=96&sign=1013fceadbd8dd58fdda207759bb1edb&c_uniq_tag=us_UbBpmXpFlwR8U1EkbrJAwwE-do1hoIPXMcZFLzT0&type=album',
                    'type' => 'y',
                    'width' => 572,
                  ),
                  9 => 
                  array (
                    'height' => 1080,
                    'url' => 'https://sun9-44.userapi.com/impf/c844521/v844521545/3123a/ev_WUIVpd9k.jpg?size=766x1080&quality=96&sign=2be1246864601f957c94ae7b8ecb6d94&c_uniq_tag=SRPmTr8kJxi2UbJPDluxlA2w1AA0UoPkgEcXTJGwM64&type=album',
                    'type' => 'z',
                    'width' => 766,
                  ),
                ),
                'text' => '',
                'user_id' => 100,
              ),
            ),
          ),
          'post_source' => 
          array (
            'data' => 'profile_photo',
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 3,
          ),
          'hash' => 'dY6MNicESZbsM7x9gaRVwp0CwAiM',
        ),
        10 => 
        array (
          'id' => 3,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1521811009,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => 'Вы уже готовитесь к отпуску вместе с детьми?
  Остался последний шанс, чтобы научиться свободно общаться на английском 👅',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'photo',
              'photo' => 
              array (
                'album_id' => -7,
                'date' => 1521811009,
                'id' => 456239020,
                'owner_id' => -150625730,
                'has_tags' => false,
                'access_key' => 'd868265886fb07874e',
                'post_id' => 3,
                'sizes' => 
                array (
                  0 => 
                  array (
                    'height' => 130,
                    'url' => 'https://sun9-10.userapi.com/impf/c840624/v840624081/68c95/SyaB0w6RC3k.jpg?size=92x130&quality=96&sign=c3066bd10d21d7ba2300628f8d876d50&c_uniq_tag=HMwlN-iPTvhHtovksOv8PwQc4KEJ__N7pBFxA_MQ5Lk&type=album',
                    'type' => 'm',
                    'width' => 92,
                  ),
                  1 => 
                  array (
                    'height' => 183,
                    'url' => 'https://sun9-10.userapi.com/impf/c840624/v840624081/68c95/SyaB0w6RC3k.jpg?size=130x183&quality=96&sign=6f7b311378a450c1182d43d0a51895fa&c_uniq_tag=97BT-Qaw_TzWBF1x28d7k-MbIZVHQiuOPq-Ec1ZFKzw&type=album',
                    'type' => 'o',
                    'width' => 130,
                  ),
                  2 => 
                  array (
                    'height' => 282,
                    'url' => 'https://sun9-10.userapi.com/impf/c840624/v840624081/68c95/SyaB0w6RC3k.jpg?size=200x282&quality=96&sign=5662e551f9a09d0ba4f33981973535eb&c_uniq_tag=qbhRpzDIsaZG-bu7ZNfiPlh7n-mpQm4X0hZcYpDekWk&type=album',
                    'type' => 'p',
                    'width' => 200,
                  ),
                  3 => 
                  array (
                    'height' => 451,
                    'url' => 'https://sun9-10.userapi.com/impf/c840624/v840624081/68c95/SyaB0w6RC3k.jpg?size=320x451&quality=96&sign=600a62e2f316cd7d9245a2cdf2023a2d&c_uniq_tag=StKAldJA3FBnmHs_x1I4w52EOPrcf2e1cOZdF8Y9y0M&type=album',
                    'type' => 'q',
                    'width' => 320,
                  ),
                  4 => 
                  array (
                    'height' => 719,
                    'url' => 'https://sun9-10.userapi.com/impf/c840624/v840624081/68c95/SyaB0w6RC3k.jpg?size=510x719&quality=96&sign=cf5a5c30df294cbdcdf791d1146fc425&c_uniq_tag=_9yog5JBcLcRL_g_2VMribogAnM8iluB5GDgC6X2sUc&type=album',
                    'type' => 'r',
                    'width' => 510,
                  ),
                  5 => 
                  array (
                    'height' => 75,
                    'url' => 'https://sun9-10.userapi.com/impf/c840624/v840624081/68c95/SyaB0w6RC3k.jpg?size=53x75&quality=96&sign=2b18d7636f7318d1d80d3243b5c97e40&c_uniq_tag=3gVhjgZCSoSiz9D71951t1PBqDI6HCDV6i8Y-QdcR_U&type=album',
                    'type' => 's',
                    'width' => 53,
                  ),
                  6 => 
                  array (
                    'height' => 1748,
                    'url' => 'https://sun9-10.userapi.com/impf/c840624/v840624081/68c95/SyaB0w6RC3k.jpg?size=1240x1748&quality=96&sign=8365e28d6ee26f0ec6c9d46669cd71e9&c_uniq_tag=yKZBw4LzCyxiaK4-Y7croo5TNjiWbgmV8uBqzJjv9G8&type=album',
                    'type' => 'w',
                    'width' => 1240,
                  ),
                  7 => 
                  array (
                    'height' => 604,
                    'url' => 'https://sun9-10.userapi.com/impf/c840624/v840624081/68c95/SyaB0w6RC3k.jpg?size=428x604&quality=96&sign=e7f78509b82dc4804ec1cfa991d3c1f4&c_uniq_tag=Dsbfh_62EH1pwf2LUF1SUhCe3uT9vXyx1iIvmTxGtoc&type=album',
                    'type' => 'x',
                    'width' => 428,
                  ),
                  8 => 
                  array (
                    'height' => 807,
                    'url' => 'https://sun9-10.userapi.com/impf/c840624/v840624081/68c95/SyaB0w6RC3k.jpg?size=572x807&quality=96&sign=49f383cc76174bc6c1d134404721734b&c_uniq_tag=ljB6KCDCoqnZAe0SnlMKwzzRmYzr2zylIT2NcShDWhs&type=album',
                    'type' => 'y',
                    'width' => 572,
                  ),
                  9 => 
                  array (
                    'height' => 1080,
                    'url' => 'https://sun9-10.userapi.com/impf/c840624/v840624081/68c95/SyaB0w6RC3k.jpg?size=766x1080&quality=96&sign=67d8f1c4d9f855d757361b4031826f1b&c_uniq_tag=Og4e_p3TZY6pMG1kro57hhtU9XWcIQkNPYGZhAZLTPk&type=album',
                    'type' => 'z',
                    'width' => 766,
                  ),
                ),
                'text' => '',
                'user_id' => 100,
              ),
            ),
          ),
          'post_source' => 
          array (
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 6,
          ),
          'hash' => 'WMllKgUuO7rp6rMu4hySaTogUR0m',
        ),
        11 => 
        array (
          'id' => 2,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1521485383,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => '',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'photo',
              'photo' => 
              array (
                'album_id' => -7,
                'date' => 1521485383,
                'id' => 456239019,
                'owner_id' => -150625730,
                'has_tags' => false,
                'access_key' => '8e66a08753518acb63',
                'post_id' => 2,
                'sizes' => 
                array (
                  0 => 
                  array (
                    'height' => 130,
                    'url' => 'https://sun9-62.userapi.com/impf/c845018/v845018610/8b22/7gdk5Fw8Ptw.jpg?size=92x130&quality=96&sign=e13a201ab1be06378873daa4de6a5875&c_uniq_tag=JR9eMiO5mtsevmv_4wdHt5kRTDjJXidCxzS0AHr2mw0&type=album',
                    'type' => 'm',
                    'width' => 92,
                  ),
                  1 => 
                  array (
                    'height' => 183,
                    'url' => 'https://sun9-62.userapi.com/impf/c845018/v845018610/8b22/7gdk5Fw8Ptw.jpg?size=130x183&quality=96&sign=bc8d5d6c70d2d1ae278aea00191ab511&c_uniq_tag=QcV7cEdvkHMgJ71febQZt1egDrHQVCmRrOYOuvtmmJY&type=album',
                    'type' => 'o',
                    'width' => 130,
                  ),
                  2 => 
                  array (
                    'height' => 282,
                    'url' => 'https://sun9-62.userapi.com/impf/c845018/v845018610/8b22/7gdk5Fw8Ptw.jpg?size=200x282&quality=96&sign=eb858b7bd43f4db5a955af74fa314a6c&c_uniq_tag=MkZAUjLB-uhZkUVLSrQrool7pzRHQfUmmNgehvk_1j0&type=album',
                    'type' => 'p',
                    'width' => 200,
                  ),
                  3 => 
                  array (
                    'height' => 451,
                    'url' => 'https://sun9-62.userapi.com/impf/c845018/v845018610/8b22/7gdk5Fw8Ptw.jpg?size=320x451&quality=96&sign=4d7de656904ef2522628b0d3833ef7c9&c_uniq_tag=TFm-0WzC7Qzi4Jeb0-dTi0wMJlAO924RPa_YoTsXbtg&type=album',
                    'type' => 'q',
                    'width' => 320,
                  ),
                  4 => 
                  array (
                    'height' => 719,
                    'url' => 'https://sun9-62.userapi.com/impf/c845018/v845018610/8b22/7gdk5Fw8Ptw.jpg?size=510x719&quality=96&sign=9410740feebb7332c19118c1325c6687&c_uniq_tag=fG1TsK2sCmCSReZ7br77Zmm6z5G1R2BPkEasyHqXw4Q&type=album',
                    'type' => 'r',
                    'width' => 510,
                  ),
                  5 => 
                  array (
                    'height' => 75,
                    'url' => 'https://sun9-62.userapi.com/impf/c845018/v845018610/8b22/7gdk5Fw8Ptw.jpg?size=53x75&quality=96&sign=c0b78bf840b80f4dc0f1679fa3f5ac0f&c_uniq_tag=xTThLnNGz4RLjOEbYrfHvHRlBrKRaLG1cBLj7ekHASs&type=album',
                    'type' => 's',
                    'width' => 53,
                  ),
                  6 => 
                  array (
                    'height' => 1748,
                    'url' => 'https://sun9-62.userapi.com/impf/c845018/v845018610/8b22/7gdk5Fw8Ptw.jpg?size=1240x1748&quality=96&sign=eabad490e3c47751f2dd66d671c517bd&c_uniq_tag=oedQCvB-U-6CiCW8eYbHoJZyJPG6Tvc-tINmkjWqWeI&type=album',
                    'type' => 'w',
                    'width' => 1240,
                  ),
                  7 => 
                  array (
                    'height' => 604,
                    'url' => 'https://sun9-62.userapi.com/impf/c845018/v845018610/8b22/7gdk5Fw8Ptw.jpg?size=428x604&quality=96&sign=cc0295d41a3c38a3b61e0d06647c8fab&c_uniq_tag=BS8BOAHyvpIdwvKFrq9uXLRA38DippkbpGyR9pZQOu0&type=album',
                    'type' => 'x',
                    'width' => 428,
                  ),
                  8 => 
                  array (
                    'height' => 807,
                    'url' => 'https://sun9-62.userapi.com/impf/c845018/v845018610/8b22/7gdk5Fw8Ptw.jpg?size=572x807&quality=96&sign=094686506e58c71afb0dce271cc1c361&c_uniq_tag=E7xpgHHvDU8eVPn34GIx0nGXIsg9y8oSEhHL7vJ_-00&type=album',
                    'type' => 'y',
                    'width' => 572,
                  ),
                  9 => 
                  array (
                    'height' => 1080,
                    'url' => 'https://sun9-62.userapi.com/impf/c845018/v845018610/8b22/7gdk5Fw8Ptw.jpg?size=766x1080&quality=96&sign=53971e4b07ed61e02a1803519f8bec17&c_uniq_tag=uJvbmloF9qETiBJCDAuge0De-MKGNcKL5wn4rXEHm4I&type=album',
                    'type' => 'z',
                    'width' => 766,
                  ),
                ),
                'text' => '',
                'user_id' => 100,
              ),
            ),
            1 => 
            array (
              'type' => 'link',
              'link' => 
              array (
                'url' => 'https://m.vk.com/@syktyvenglish-yazykovaya-shkola-pygmalion-priglashaet-vas-i-vashih-detei-n',
                'button' => 
                array (
                  'action' => 
                  array (
                    'type' => 'open_url',
                    'target' => 'internal',
                    'url' => 'https://m.vk.com/@syktyvenglish-yazykovaya-shkola-pygmalion-priglashaet-vas-i-vashih-detei-n',
                  ),
                  'title' => 'Читать',
                ),
                'description' => 'Статья',
                'photo' => 
                array (
                  'album_id' => -66,
                  'date' => 1521485254,
                  'id' => 456239018,
                  'owner_id' => -150625730,
                  'has_tags' => false,
                  'sizes' => 
                  array (
                    0 => 
                    array (
                      'height' => 130,
                      'url' => 'https://sun9-14.userapi.com/impf/c845218/v845218610/a9ab/OTTARarlrUg.jpg?size=92x130&quality=96&sign=6ac6a049e34545574113cc02802ee9a8&c_uniq_tag=--_PbGZFcgx_y5VF2wcKaE5DITFzRbhSk0FjoP06DNA&type=album',
                      'type' => 'm',
                      'width' => 92,
                    ),
                    1 => 
                    array (
                      'height' => 183,
                      'url' => 'https://sun9-14.userapi.com/impf/c845218/v845218610/a9ab/OTTARarlrUg.jpg?size=130x183&quality=96&sign=02ead0a9a961ffd21fca671391d819e3&c_uniq_tag=w--2_2tHL_bqrQ_wNHiUIKRq8Ql-5xi1FlJ5mQj4r0Q&type=album',
                      'type' => 'o',
                      'width' => 130,
                    ),
                    2 => 
                    array (
                      'height' => 282,
                      'url' => 'https://sun9-14.userapi.com/impf/c845218/v845218610/a9ab/OTTARarlrUg.jpg?size=200x282&quality=96&sign=edd6e43493265126a18e35f7ec7f0f84&c_uniq_tag=o-8Kww9PpKb5SGebFHnxg7vF0_GLOck61s0uT6LF57w&type=album',
                      'type' => 'p',
                      'width' => 200,
                    ),
                    3 => 
                    array (
                      'height' => 451,
                      'url' => 'https://sun9-14.userapi.com/impf/c845218/v845218610/a9ab/OTTARarlrUg.jpg?size=320x451&quality=96&sign=7a69944d1ce91c2b28531a799ff89999&c_uniq_tag=eC9hSCnxKZQjSUIVrGfvVw0MkfGvxUUFsXKuml5v244&type=album',
                      'type' => 'q',
                      'width' => 320,
                    ),
                    4 => 
                    array (
                      'height' => 719,
                      'url' => 'https://sun9-14.userapi.com/impf/c845218/v845218610/a9ab/OTTARarlrUg.jpg?size=510x719&quality=96&sign=9f0bfe8dadaba2582ab18e04b7fa0af2&c_uniq_tag=OV_05prfCfSoQH0Xh00mYk-UR7q4zu2DkQNwVBu8dV8&type=album',
                      'type' => 'r',
                      'width' => 510,
                    ),
                    5 => 
                    array (
                      'height' => 75,
                      'url' => 'https://sun9-14.userapi.com/impf/c845218/v845218610/a9ab/OTTARarlrUg.jpg?size=53x75&quality=96&sign=2372044028be7877d1f481f247cc4f3c&c_uniq_tag=EWX9EErdH8GQMa6s6GuxNDQxvhUmw_Z5d1jMvRfqeHY&type=album',
                      'type' => 's',
                      'width' => 53,
                    ),
                    6 => 
                    array (
                      'height' => 1748,
                      'url' => 'https://sun9-14.userapi.com/impf/c845218/v845218610/a9ab/OTTARarlrUg.jpg?size=1240x1748&quality=96&sign=dda0890644ebca4da8c25c6a17eab6c6&c_uniq_tag=8VwfU45cwn-ChfQzCGdqY3lmBdqUVEJq_qYywp5kGiY&type=album',
                      'type' => 'w',
                      'width' => 1240,
                    ),
                    7 => 
                    array (
                      'height' => 604,
                      'url' => 'https://sun9-14.userapi.com/impf/c845218/v845218610/a9ab/OTTARarlrUg.jpg?size=428x604&quality=96&sign=c644a572101adb163ac51cb786c7ed2f&c_uniq_tag=XTwMHHQPi37fW7onWJWXVkqc8rYzUYGjkdIJ0rz1AVg&type=album',
                      'type' => 'x',
                      'width' => 428,
                    ),
                    8 => 
                    array (
                      'height' => 807,
                      'url' => 'https://sun9-14.userapi.com/impf/c845218/v845218610/a9ab/OTTARarlrUg.jpg?size=572x807&quality=96&sign=b0d7898bfdc4fb996b5b3c6326e5a3b3&c_uniq_tag=hcqwgsF90UCU3Ian7CGYriCkfLuukHxrtuCbGYpe7lo&type=album',
                      'type' => 'y',
                      'width' => 572,
                    ),
                    9 => 
                    array (
                      'height' => 1080,
                      'url' => 'https://sun9-14.userapi.com/impf/c845218/v845218610/a9ab/OTTARarlrUg.jpg?size=766x1080&quality=96&sign=803b058588d4c32085c80364dd9cc3b4&c_uniq_tag=BHDS64F3Ehex_bib21cNIzLWBOE1HhMkXiDdd4aDgL0&type=album',
                      'type' => 'z',
                      'width' => 766,
                    ),
                  ),
                  'text' => '',
                  'user_id' => 100,
                ),
                'title' => 'Языковая школа Pygmalion приглашает Вас и ваших детей на языковые курсы!!!',
              ),
            ),
          ),
          'post_source' => 
          array (
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 6,
          ),
          'hash' => '4mdcrDFos_7nA3EGZjtWbCassNiP',
        ),
        12 => 
        array (
          'id' => 1,
          'from_id' => -150625730,
          'owner_id' => -150625730,
          'date' => 1521485117,
          'marked_as_ads' => 0,
          'post_type' => 'post',
          'text' => '',
          'attachments' => 
          array (
            0 => 
            array (
              'type' => 'photo',
              'photo' => 
              array (
                'album_id' => -7,
                'date' => 1521485117,
                'id' => 456239017,
                'owner_id' => -150625730,
                'has_tags' => false,
                'access_key' => 'baeae3be3c2d797e39',
                'post_id' => 1,
                'sizes' => 
                array (
                  0 => 
                  array (
                    'height' => 130,
                    'url' => 'https://sun9-86.userapi.com/impf/hLflUJWkmWBz6t_eHV_Jr0gSJK3ny5dsQLdJwg/psk8o7S_W2g.jpg?size=92x130&quality=96&sign=87d1f5b1c535fce75ffa66a6748c0cd1&c_uniq_tag=K9GslJyO8SlToB0Z7yOOI_W_MdXaBMQI9EIZSmPTqIM&type=album',
                    'type' => 'm',
                    'width' => 92,
                  ),
                  1 => 
                  array (
                    'height' => 183,
                    'url' => 'https://sun9-86.userapi.com/impf/hLflUJWkmWBz6t_eHV_Jr0gSJK3ny5dsQLdJwg/psk8o7S_W2g.jpg?size=130x183&quality=96&sign=d31dee99d83d2ea819302cd337a6812b&c_uniq_tag=I9pFlFfRJ_xZE642I7_hMJf9n8_H7VC6FduiRh7bAbI&type=album',
                    'type' => 'o',
                    'width' => 130,
                  ),
                  2 => 
                  array (
                    'height' => 282,
                    'url' => 'https://sun9-86.userapi.com/impf/hLflUJWkmWBz6t_eHV_Jr0gSJK3ny5dsQLdJwg/psk8o7S_W2g.jpg?size=200x282&quality=96&sign=47d868fae54dc3db3b8e908ba73dbc4e&c_uniq_tag=JgKZXdSnyHXuc-FtkZphtkWInSw_fj2MovUe_KGSxIk&type=album',
                    'type' => 'p',
                    'width' => 200,
                  ),
                  3 => 
                  array (
                    'height' => 451,
                    'url' => 'https://sun9-86.userapi.com/impf/hLflUJWkmWBz6t_eHV_Jr0gSJK3ny5dsQLdJwg/psk8o7S_W2g.jpg?size=320x451&quality=96&sign=7bb3c2f145c78264f1a79e2118d1e446&c_uniq_tag=PgNFm6eCadnRGFXejmMiMPNfjmZR4QJJSDw7taIvkVw&type=album',
                    'type' => 'q',
                    'width' => 320,
                  ),
                  4 => 
                  array (
                    'height' => 719,
                    'url' => 'https://sun9-86.userapi.com/impf/hLflUJWkmWBz6t_eHV_Jr0gSJK3ny5dsQLdJwg/psk8o7S_W2g.jpg?size=510x719&quality=96&sign=602c888a3c0a3bd7cd452076157d04d2&c_uniq_tag=cGF4CwMNfTMqRVNWLnHTHQHfG6SpN4hZKDz49mnyIB8&type=album',
                    'type' => 'r',
                    'width' => 510,
                  ),
                  5 => 
                  array (
                    'height' => 75,
                    'url' => 'https://sun9-86.userapi.com/impf/hLflUJWkmWBz6t_eHV_Jr0gSJK3ny5dsQLdJwg/psk8o7S_W2g.jpg?size=53x75&quality=96&sign=c232f9750b9e88b11672780a6d99072f&c_uniq_tag=LDzbgHb1iCXqS_rFtTgrhttS6t-ON77LM312HVBys1U&type=album',
                    'type' => 's',
                    'width' => 53,
                  ),
                  6 => 
                  array (
                    'height' => 1748,
                    'url' => 'https://sun9-86.userapi.com/impf/hLflUJWkmWBz6t_eHV_Jr0gSJK3ny5dsQLdJwg/psk8o7S_W2g.jpg?size=1240x1748&quality=96&sign=2d537391b868b7c6c66ff848c685c2a3&c_uniq_tag=Dxva_Bf2ee0t87OBePj9Xo3g1I3Jf7d_3_5PWoKg03g&type=album',
                    'type' => 'w',
                    'width' => 1240,
                  ),
                  7 => 
                  array (
                    'height' => 604,
                    'url' => 'https://sun9-86.userapi.com/impf/hLflUJWkmWBz6t_eHV_Jr0gSJK3ny5dsQLdJwg/psk8o7S_W2g.jpg?size=428x604&quality=96&sign=08fd2ebce84c0f9c72cfaec456076d8a&c_uniq_tag=vhMKwDa0KZOzo618bwP8OsX7EPF-ln4GlVBsiGHUUks&type=album',
                    'type' => 'x',
                    'width' => 428,
                  ),
                  8 => 
                  array (
                    'height' => 807,
                    'url' => 'https://sun9-86.userapi.com/impf/hLflUJWkmWBz6t_eHV_Jr0gSJK3ny5dsQLdJwg/psk8o7S_W2g.jpg?size=572x807&quality=96&sign=c8d5a9885f3918bf98006a0fde54da83&c_uniq_tag=zCD4H04aWZW7V-kUohfhd2T4aimHGZZgd_My8t7dIPY&type=album',
                    'type' => 'y',
                    'width' => 572,
                  ),
                  9 => 
                  array (
                    'height' => 1080,
                    'url' => 'https://sun9-86.userapi.com/impf/hLflUJWkmWBz6t_eHV_Jr0gSJK3ny5dsQLdJwg/psk8o7S_W2g.jpg?size=766x1080&quality=96&sign=d032e53822e02947338d4d93054416ef&c_uniq_tag=Fqdq3lwS7US5MIBDbAeWiqRkRhWSAuNPMUkf1lgckXc&type=album',
                    'type' => 'z',
                    'width' => 766,
                  ),
                ),
                'text' => '',
                'user_id' => 100,
              ),
            ),
          ),
          'post_source' => 
          array (
            'type' => 'vk',
          ),
          'comments' => 
          array (
            'can_post' => 1,
            'count' => 0,
            'groups_can_post' => true,
          ),
          'likes' => 
          array (
            'can_like' => 1,
            'count' => 0,
            'user_likes' => 0,
            'can_publish' => 1,
          ),
          'reposts' => 
          array (
            'count' => 0,
            'user_reposted' => 0,
          ),
          'views' => 
          array (
            'count' => 3,
          ),
          'hash' => 'hhVEZJgfMqxQaYZCiBaOdyOpUfDs',
        ),
      ),
    ),
);