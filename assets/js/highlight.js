const wrapper = document.getElementById("highlight-effect");
const className = "in-view";

const observer = new IntersectionObserver(
	(entries) => {
		entries.forEach((entry) => {
			if (entry.isIntersecting) {
				wrapper.classList.add(className);
				return;
			}

			wrapper.classList.remove(className);
		});
	},
	{
		threshold: 1
	}
);

observer.observe(wrapper);
