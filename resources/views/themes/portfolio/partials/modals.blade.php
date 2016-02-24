
<div data-target="about" class="modal">
  <h2 class="title">About me
    <svg role="img" class="close-icon">
      <use xlink:href="#close-icon"></use>
    </svg>
  </h2>
  <div class="content">
    <div class="photo"><img src="https://s3-us-west-2.amazonaws.com/realnerdo/uploads/profile/asaelx.jpg" alt="asaelx" class="img"/>
      <div class="data">
        <div class="name">{{ $admin->name }}</div>
        <div class="degree">Computer Science Engineer</div>
        <div class="job">{{ $admin->occupation }}</div>
      </div>
    </div>
    <p>My name is Asael Jaimes. I currently live in the city of Merida, Yucatan, Mexico and I make things for the internet. I'm very passionate about technology and great design.</p>
    <p>I studied Computer Science Engineering because I love to understand how things work. I also studied design in order to know how to create interesting solutions.</p>
    <p>Ever since I was a little kid I've always loved to experiment with things, disassemble them and find out if I can create new things. I love to learn as much as I can, I'm very self-taught and proactive.</p>
    <p>I develop projects which combine the care for design and functionality, so they can complement each other in order to create solutions with an intuitive experience for the users.</p>
    <p>When I'm not on the web, you can find me feeding my other passions. While I love to spend my time working, experimenting and learning about design and code stuff through my screen, I like to clear my mind doing a lot of skateboarding, it teaches me to face my fears and improving myself by mastering new tricks. I also love to watch movies, even the bad ones. I'm learning about filmmaking and photography, which I intend to combine it with traveling.</p>
  </div>
</div>
<div data-target="contact" class="modal">
  <h2 class="title">Contact me
    <svg role="img" class="close-icon">
      <use xlink:href="#close-icon"></use>
    </svg>
  </h2>
  <div class="content">
    <p>You can contact me for stuff like:</p>
    <ul>
      <li>“I need a simple but elegant website to have presence on internet”.</li>
      <li>“I want an online store to sell my products”.</li>
      <li>“I need an administrable website where I can modify its content easily”.</li>
      <li>“I want a business card design”.</li>
      <li>“I'd like a redesign to the website I already have”.</li>
      <li>“Let's go grab a beer and talk about this awesome project I have”.</li>
    </ul>
    <p>Or any other thing in your mind and let's see what we can do.</p>
    <div class="info">
      <div class="photo"><img src="https://s3-us-west-2.amazonaws.com/realnerdo/uploads/profile/profile-big.png" class="img"/></div>
      <h3 class="title">My info</h3>
      <p class="degree">Computer Science Engineer</p>
      <p class="phone">
        <svg role="img" class="phone-icon">
          <use xlink:href="#phone-icon"></use>
        </svg>+52 (999) 217 5661
      </p>
      <p class="email">
        <svg role="img" class="email-icon">
          <use xlink:href="#email-icon"></use>
        </svg><a href="mailto:{{ $admin->email }}" class="link">{{ $admin->email }}</a>
      </p>
    </div><a href="#" target="_blank" class="cv btn green">Resume 
      <svg role="img" class="right-icon">
        <use xlink:href="#right-icon"></use>
      </svg></a>
  </div>
</div>
<div class="layer"></div>