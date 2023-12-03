// Select all social media links
const socialMediaLinks = document.querySelectorAll('.sci li a');

// Add a hover effect to the social media links
socialMediaLinks.forEach((link) => {
  link.addEventListener('mouseover', () => {
    link.style.background = '#03a9f4';
    link.style.color = '#fff';
  });

  link.addEventListener('mouseout', () => {
    link.style.background = 'transparent';
    link.style.color = '#444';
  });
});
