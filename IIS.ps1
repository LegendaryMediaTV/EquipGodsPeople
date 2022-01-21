Write-Host "Starting the app pool for EGP"
Start-WebAppPool "EGP"

Write-Host "Starting the IIS site for EGP"
Start-Website "EGP"

Read-Host -Prompt "Press Enter when ready to close"

Write-Host "Stopping the IIS site for EGP"
Stop-Website "EGP"

Write-Host "Stopping the app pool for EGP"
Stop-WebAppPool "EGP"
