<?
    // Klassendefinition
    class ModbusOutput extends IPSModule {
 
        // Der Konstruktor des Moduls
        // Überschreibt den Standard Kontruktor von IPS
        //public function __construct($InstanceID) {
            // Diese Zeile nicht löschen
        //    parent::__construct($InstanceID);
 
            // Selbsterstellter Code
        //}
 
        // Überschreibt die interne IPS_Create($id) Funktion
        public function Create()
        {
        	//Never delete this line!
        	parent::Create();
        		
        	$this->RegisterPropertyInteger("outputID", 0);
        	$this->RegisterPropertyInteger("statusID", 0);
        	$this->RegisterPropertyInteger("autoID", 0);

        }
        
        // Überschreibt die intere IPS_ApplyChanges($id) Funktion
    		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
			
			
			$this->RegisterVariableBoolean("power", "Status", "~Switch");
			$this->EnableAction("power");
      
			$this->RegisterVariableString("message", "Nachricht", "~TextBox");
			$this->EnableAction("message");
			
			$this->RegisterVariableString("program", "Programm", "~String");
			$this->RegisterVariableString("show", "Sendung", "~String");
			$this->RegisterVariableString("description", "Beschreibung", "~TextBox");
			
			//$this->RegisterScript("update", "Aktualisieren", "<?\n\nE2_RequestUpdate(IPS_GetParent(\$_IPS['SELF']));\n\n?>", 0);
		}
 
        /**
        * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
        * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wiefolgt zur Verfügung gestellt:
        *
        * ABC_MeineErsteEigeneFunktion($id);
        *
        */
        public function MeineErsteEigeneFunktion() {
            // Selbsterstellter Code
        }
    }
?>