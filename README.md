## project name: better immunity
## domain name: https://betterimmunity.ga
## backend: apache
## front end: wordpress
## host: digitalocean

# How to Install WordPress in DigitalOcean

## Sign up and Create a Droplet

**step1**: Go to DigitalOcean (special link with $50 free credits)
**step2**: Hit [Sign up] button on the Home Page
**step3**: Enter Email Address and desired Password OR you can even register with Google or GitHub Account using SSO
**step4**: Verify your Email ID (not required for SSO)
**step5**: Enter the Payment details; Credit Card or PayPal (Do not worry! you won’t be charged until credits are used or expired)
**step6**: And finally login to your DigitalOcean dashboard


## Steps to Create Droplet for WordPress:

**step1**: Hit on Create Droplet
**step2**: Select the latest Ubuntu OS 18.04  (current stable version while writing this post)
**step3**: Choose Droplet Size. I recommend using at least 1 GB RAM for smooth functioning. **step4**: Select Data Center (based on targetted region/country)
**step5**: Select Additional Option (if required – not necessary for WordPress)
**step6**: Number of Droplets: 1
**step7**: Hostname: betterimmunity.ga (or anything you name it!)
**step8**: Hit on Create button

## Adding Domain Name and Configure DNS settings

**step1**: Login to DigitalOcean dashboard
**step2**: Navigate to Networking tab in left-sidebar
**step3**: Switch to Domain tab
**step4**: Enter the domain name (betterimmunity.ga)
**step5**: Select the Droplet from the drop-down (if you’ve multiple droplets)
**step6**: Hit on Add Domain
**step7**: The domain name will start appearing
**step8**:  registrar domain name settings and modify the Name Server(NS) to point towards DigitalOcean nameserver with below values:
<pre>
ns1.digitalocean.com
ns2.digitalocean.com
ns3.digitalocean.com 
</pre>

## configure htttps

**step1**:  you need to install and activate the Really Simple SSL plugin. 
**step2**: Upon activation, you need to visit Settings » SSL page. The plugin will automatically detect your SSL certificate, and it will set up your WordPress site to use HTTPs.
**step3**: Then you can see https is congured successfully





