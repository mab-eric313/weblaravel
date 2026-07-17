use dblaravel;

INSERT INTO posts (id, title, images, category, content, comments, published, created_at, updated_at)
VALUES (
	1,
   'Proton 11.0-1 Released To Advance Valve Steam Play For The Best Linux Experience Yet',
   'https://www.phoronix.net/image.php?id=radv-amdvlk-strix-halo&image=strix_halo_amdvlk_sml',
   'Valve',
   'Proton 11.0-1 was just released as stable as the newest major version of this downstream of Wine that powers Valve Steam Play to provide for a great Windows gaming experience across conventional Linux systems plus the popular Steam Deck and brand new Steam Machine.',
	5,
   'yes',
   '2026-07-09 10:14:00',
   '2026-07-09 10:14:00'
),
(
	2,
   'LibreOffice 26.8 Beta Released For Improving This Free Software Office Suite',
   'https://www.phoronix.net/image.php?id=2026&image=libreoffice_bars_sml',
   'LibreOffice',
   'The Document Foundation today announced the first beta release of the LibreOffice 26.8 open-source office suite set for its stable debut in August.',
   10,
   'yes',
   '2026-07-10 11:09:00',
   '2026-07-10 12:14:00'
),
(
	3,
   'Redox OS Gets GTK3 Backend For Orbital Desktop, Fractional Scaling & USB Gamepads',
   'https://www.phoronix.net/image.php?id=2026&image=redoxos_fractional_sml',
   'Operating Systems',
   'The open-source, Rust-based Redox OS platform had a very eventful June with many new features implemented and more software ported over to run on this from-scratch operating system.',
	3,
   'yes',
   '2026-07-10 11:09:00',
   '2026-07-10 12:14:00'
),
(
	4,
   'Linux 7.3 Expected To "Flatten The Pick" For Better Scheduling While Gaming & More',
   'https://www.phoronix.net/image.php?id=2026&image=flatten_the_pick_benchmark_sml',
   'Linux Kernel',
   'Going back to early May there were patches for improving the Linux scheduler to help with gaming performance on old "potato" hardware by providing better cgroup scheduling. Those patches, referred to as the "flatten the pick" patch series, are now slated for introduction in the Linux 7.3 kernel.',
	6,
   'yes',
   '2026-07-06 07:00:00',
   '2026-07-06 07:00:00'
);

