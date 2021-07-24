CREATE SCHEMA rsgm;
CREATE TABLE rsgm.lantai(
 lantai_id SERIAL PRIMARY KEY,
 nama_lantai VARCHAR (50) NOT NULL,
 gedung_id INT NOT NULL
);
CREATE TABLE rsgm.ruangan(
 ruangan_id SERIAL PRIMARY KEY, 
 nama_ruangan VARCHAR (50) NOT NULL,
 arah VARCHAR(10),
 fungsi_ruangan VARCHAR(255),
 kapasitas INT NOT NULL,
 material VARCHAR (255),
 jadwal_pemakaian VARCHAR(255),
 lantai_id INT,
 protokol_pengiriman VARCHAR (50),
 jumlah_sensor INT NOT NULL,

 CONSTRAINT fk_lantai
  FOREIGN KEY (lantai_id)
   REFERENCES rsgm.lantai(lantai_id)
);
CREATE TABLE rsgm.sensor(
 sensor_id SERIAL PRIMARY KEY, 
 parameter_pengukuran VARCHAR (50) NOT NULL,
 link_datasheet VARCHAR(50) NOT NULL, 
 ruangan_id INT NOT NULL,
 CONSTRAINT fk_ruangan 
  FOREIGN KEY (ruangan_id)
   REFERENCES rsgm.ruangan(ruangan_id)
); 
CREATE TABLE rsgm.standar(
   standar_id SERIAL PRIMARY KEY, 
   nama_standar VARCHAR (50) NOT NULL,
   nilai_standar INT NOT NULL, 
   dokumen_standar VARCHAR(50) NOT NULL
);
CREATE TABLE rsgm.hasil_survey(
   hasil_survey_id SERIAL PRIMARY KEY,
   waktu_survey TIMESTAMP WITH TIME ZONE NOT NULL,
   nama_penghuni VARCHAR(255),
   usia_penghuni INT NOT NULL,
   berat_badan INT,
   tinggi_badan INT,
   jenis_kelamin VARCHAR(10),
   durasi_huni NUMERIC NOT NULL,
   aktivitas_huni VARCHAR(255) NOT NULL,
   penggunaan_pendingin VARCHAR(255) NOT NULL,
   preferensi_termal VARCHAR(255) NOT NULL,
   sensasi_termal VARCHAR(255) NOT NULL,
   kualitas_udara VARCHAR(255) NOT NULL,
   privasi_suara VARCHAR(255) NOT NULL,
   tingkat_kebisingan VARCHAR(255) NOT NULL,
   kenyamanan_termal VARCHAR(255) NOT NULL,
   kenyamanan_visual VARCHAR(255) NOT NULL,
   kenyamanan_akustik VARCHAR(255) NOT NULL,
   ruangan_id INT NOT NULL,
   CONSTRAINT fk_ruangan
     FOREIGN KEY (ruangan_id) 
       REFERENCES rsgm.ruangan(ruangan_id)
);
CREATE TABLE rsgm.realtime_data(
   data_id BIGSERIAL PRIMARY KEY,
   ruangan_id INT NOT NULL,
   waktu_akuisisi TIMESTAMP WITH TIME ZONE,
   wa_integer BIGINT NOT NULL,
   waktu_server TIMESTAMP WITH TIME ZONE,
   ws_integer BIGINT NOT NULL,
   waktu_db TIMESTAMP WITH TIME ZONE,
   iluminansi NUMERIC,
   temperatur NUMERIC,
   kelembaban NUMERIC,
   "pm2.5" NUMERIC,
   pm10 NUMERIC,
   co2 NUMERIC,
   noise_audio NUMERIC,
   voc NUMERIC,
   ach NUMERIC,
   airpressure NUMERIC,
   CONSTRAINT fk_ruangan
     FOREIGN KEY(ruangan_id)
       REFERENCES rsgm.ruangan(ruangan_id)
);
CREATE TABLE rsgm.output_stauts(
   output_status_id  SERIAL PRIMARY KEY,
   waktu TIMESTAMP WITH TIME ZONE NOT NULL,
   ruangan_id INT NOT NULL,
   status_ieq VARCHAR (50) NOT NULL,
   setpoint_id INT NOT NULL,
   CONSTRAINT fk
     FOREIGN KEY (ruangan_id)
       REFERENCES rsgm.ruangan(ruangan_id)
);

