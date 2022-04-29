class myHeader extends HTMLElement {
    constructor() {
      super();
      this.attachShadow({ mode: "open" });
    }

    getTemplate() {
      const template = document.createElement("template");
      template.innerHTML = `
      <header class="hero">
      <nav class="nav container">
          <div class="nav_logo">
              <h2 class="nav_title">Quick Code</h2>
          </div>

          <ul class="nav_link nav_link--menu">
              <li class="nav_items">
                  <a href="index.html" class="nav_links">Inicio</a>
              </li>
              <li class="nav_items">
                  <a href="acercade.html" class="nav_links">Acerca de</a>
              </li>
              <li class="nav_items">
                  <a href="contact.html" class="nav_links">Contacto</a>
              </li>
              <li class="nav_items">
                  <a href="blog.html" class="nav_links">Blog</a>
              </li>
              <li class="nav_items">
                  <a href="form.html" class="nav_links">Formulario</a>
              </li>
              <li class="nav_items">
                  <a href="operaciones.html" class="nav_links">Operaciones</a>
              </li>
              <li class="nav_items">
                  <a href="mapa_google.html" class="nav_links">GoogleMaps</a>
              </li>
              <li class="nav_items">
                  <a href="table.html" class="nav_links">Tabla</a>
              </li>
              <li class="nav_items">
                  <a href="countdown.html" class="nav_links">Cuenta Regresiva</a>
              </li>

              <img src="./images/close.svg" class="nav_close">
          </ul>
          <div class="nav_menu">
              <img src="./images/menu.svg" class="nav_img">
          </div>
      </nav>

      <section class="hero_container container">
          <h1 class="hero_title">Bienvenido al mundo de la programacion</h1>
          <p class="hero_paragraph">si quiere aprender a programar debera tener en cuenta unos conceptos en los cuales les va ayudar a usted a contruir su primera web</p>
          <a href="https://www.w3schools.com/" class="cta">Comienza ahora</a>
      </section>
  </header>
        ${this.getStyles()}
      `;
      return template;
    }
    getStyles() {
      return `
        <style>
        :root{
            --padding-container: 100px 0;
            --color-title: blue;
        }
        
        body{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
        .container{
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            overflow: hidden;
            padding: var(--padding-container);
        }
        .hero{
            width: 100%;
            height: 100vh;
            min-height: 600px;
            max-height: 800px;
            position: relative;
            display: grid;
            grid-template-rows: 100px 1fr;
            color: #fff;
            }
            
            .hero::before{
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-image: linear-gradient(180deg, #0000008c 0%, #0000008c 100%), url(./images/programacion3.jpg);
                background-size: cover;
                clip-path: polygon(0 0, 100% 0, 100% 80%, 50% 95%, 0 80%);
                z-index: -1;
            }
            
            .nav{
                --padding-container: 0;
                height: 100%;
                display: flex;
                align-items: center;
            }
            
            .nav_title{
                font-weight: 300;
            }
            
            .nav_items{
                list-style: none;
            }
            
            .nav_link{
                margin-left: auto;
                padding: 0;
                display: grid;
                grid-auto-flow: column;
                grid-auto-columns: max-content;
                gap: 2em;
            }
            
            .nav_links{
                color: #fff;
                text-decoration: none;
            }
            
            .nav_menu{
                margin-left: auto;
                cursor: pointer;
                
            }
            
            .nav_img{
                display: block;
                width: 30px;
            }
            
            .nav_close{
                display: var(--show, none);
            }
            
            .hero_container{
                max-width: 800px;
                --padding-container:0;
                display: grid;
                grid-auto-rows: max-content;
                align-content: center;
                gap: 1em;
                padding-bottom: 100px;
                text-align: center;
            }
            
            .hero_title{
                font-size: 3rem;
            }
            
            .hero_paragraph{
                margin-bottom: 20px;
            }
            
            .cta{
                display: inline-block;
                background-color: #2091F9;
                justify-self: center;
                color: #fff;
                text-decoration: none;
                padding: 13px 20px;
                border-radius: 30px;
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
  customElements.define("my-header", myHeader);