import vars from '../_vars';
import '../vendor/lightbox';
import lgVideo from '../vendor/lg-video';

import { toggleCustomClass, addCustomClass, removeCustomClass } from '../functions/customFunctions';

const {eventVideoBox} = vars;


lightGallery(eventVideoBox, {
	plugins: [lgVideo],
	videoJs: true,
	videojsOptions: {
		muted: true,
		autoplay: true,
		controls: true
	}
});

const videoUrl = eventVideoBox.querySelector('[data-src]').dataset.src;
function fetchVimeoVideoThumbnail(url) {
	const oEmbedUrl = `https://vimeo.com/api/oembed.json?url=${encodeURIComponent(url)}`;

	fetch(oEmbedUrl)
			.then(response => response.json())
			.then(data => {
				eventVideoBox.querySelector('.img-responsive').src = data.thumbnail_url;
			})
			.catch(error => console.error('Error fetching Vimeo video data:', error));
}

// fetchVimeoVideoThumbnail(videoUrl);


