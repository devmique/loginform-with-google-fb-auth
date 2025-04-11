Step-by-step guide to create an OAuth 2.0 Client ID for Google login integration:

STEP 1: Go to Google Developer Console
Open: https://console.developers.google.com/


STEP 2: Create a New Project
1. Click the dropdown at the top where your project name is.
2. Click "New Project".
3. Enter:
   - Project Name: e.g., `ParentPortal Auth`
   - Leave the location as default (or choose if needed).
4. Click Create.
5. Wait a few seconds then click"Select Project" when it appears.


STEP 3: Enable Google APIs
1. In the left sidebar, go to "APIs & Services" > Library.
2. Search for and enable the following:
   - `Google+ API` (optional) or `People API` *(recommended for newer apps)*.
3. Click on the API → click **Enable**.

---

 STEP 4: Create OAuth 2.0 Credentials
1. Go to **"APIs & Services" > Credentials**.
2. Click **“+ CREATE CREDENTIALS”** > **OAuth client ID**.
3. If prompted to **configure OAuth consent screen**, do that first:

---

 Configure OAuth Consent Screen (if asked)
1. Choose **"External"** and click **Create**.
2. Fill out:
   - **App Name**: e.g., `Parent Portal`
   - **User Support Email**: your email
   - **Developer Contact Info**: your email again
3. Click **Save and Continue** for Scopes and Test Users (you can leave them blank).
4. On the last screen, click **Back to Dashboard**.



  STEP 5: Create OAuth Client ID
1. Now back on **Credentials > Create Credentials > OAuth client ID**:
2. Choose **Application Type** → Select: `Web application`.
3. Fill in:
   - **Name**: e.g., `Parent Portal Web`
   - **Authorized JavaScript origins**: e.g.,
     ```
     http://localhost
     http://localhost/yourproject
     ```
   - **Authorized redirect URIs**: e.g.,
     ```
     http://localhost/yourproject/google-callback.php
     ```
4. Click **Create**.

---

STEP 6: Copy Your Credentials
- You’ll be shown:
  - **Client ID**
  - **Client Secret**
- Copy both and **store them safely**.

These are what you’ll use in your PHP code (`google-login.php`, `google-callback.php`).

---

Facebook: 
