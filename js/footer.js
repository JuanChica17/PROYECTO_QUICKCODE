class myFooter extends HTMLElement {
    constructor() {
      super();
      this.attachShadow({ mode: "open" });
    }
    getTemplate() {
      const template = document.createElement("template");
      template.innerHTML = `
      <footer class="footer">
        <section class="footer_container container">
            <nav class="nav nav--footer">
                <h2 class="footer_title">Curso CSS.</h2>
            </nav>

            <form class="footer_form">
                <h2 class="footer_newsletter">Suscribete</h2>
                <div class="footer_inputs">
                    <input type="email" placeholder="Email:" class="footer_input">
                    <input type="submit" value="Registrate" class="footer_submit">
                </div>
            </form>
        </section>

        <section class="footer_copy container">
            <div class="footer_social">
                <a href="https://es-la.facebook.com/" class="footer_icons"><img src="./images/facebook.png" class="footer_img"></a>
                <a href="https://twitter.com/?lang=es" class="footer_icons"><img src="./images/twitter.png" class="footer_img"></a>
                <a href="https://www.youtube.com/" class="footer_icons"><img src="./images/youtube.png" class="footer_img"></a>
            </div>

            <h3 class="footer_copyright">Derechos reservados &copy; juan fernando</h3>
        </section>
    </footer>
        ${this.getStyles()}
      `;
      return template;
    }
    getStyles() {
      return `
        <style>
        .footer{
            width: 100%;
            height: 100vh;
            min-height: 600px;
            max-height: 800px;
            position: relative;
            grid-template-rows: 100px 1fr;
            color: #fff;
        }

        .footer::before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url(./images/programacion2.jpg);
            background-size: cover;
            clip-path: polygon(0 0, 100% 0%, 100% 100%, 0% 100%);
            z-index: -1;
        }
        
        .footer_title{
            font-weight: 300;
            font-size: 2rem;
            margin-bottom: 30px;
        }
        
        .footer_title, .footer_newsletter{
            color: #fff;
        }
        
        .footer_container{
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #fff;
            padding-bottom: 60px;
        }
        
        .nav--footer{
            padding-bottom: 20px;
            display: grid;
            gap: 1em;
            grid-auto-flow: row;
            height: 100%;
        }
        
        .nav_link--footer{
            display: flex;
            margin: 0;
            margin-right: 20px;
            flex-wrap: wrap;
        }
        
        .footer_inputs{
            margin-top: 10px;
            display: flex;
            overflow: hidden;
        }
        
        .footer_input{
            background-color: #fff;
            height: 50px;
            display: block;
            padding-left: 10px;
            border-radius: 6px;
            font-size: 1rem;
            outline: none;
            border: none;
            margin-right: 16px;
        }
        
        .footer_submit{
            margin-left: auto;
            display: inline-block;
            height: 50px;
            padding: 0 20px;
            background-color: #2091F9;
            border: none;
            font-size: 1rem;
            color: #fff;
            border-radius: 6px;
        }
        
        .footer_copy{
            --padding-container: 30px 0;
            text-align: center;
            color: #fff;
        }
        
        .footer_copyright{
            font-weight: 300;
        }
        
        .footer_icons{
            margin-bottom: 10px;
        }
        
        .footer_img{
            width: 30px;
        }
        </style>
      `;
    }
    render() {
      this.shadowRoot.appendChild(this.getTemplate().content.cloneNode(true));
    }
    connectedCallback() {
      this.render();
    }
  }
  customElements.define("my-footer", myFooter);